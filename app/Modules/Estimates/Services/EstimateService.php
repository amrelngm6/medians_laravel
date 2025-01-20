<?php

namespace App\Modules\Estimates\Services;

use App\Modules\Estimates\Models\Estimate;
use App\Modules\Estimates\Models\EstimateItem;
use App\Modules\Core\Models\Status;
use App\Modules\Customers\Models\Staff;
use App\Models\Auth;

class EstimateService
{
    
    public function get()
    {
        $user = Auth::user();

        $query = Estimate::forBusiness($user->business_id ?? 0);

        return $query->with('client','items')->paginate(100);
    }
    
    public function query($request, $modelId = null, $modelType = null)
    {
        $query = Estimate::query();

        if (!empty($modelType) && !empty($modelId)) {
            $query->where("model_id", $modelId)->where('model_type', $modelType);
        }
        
        if (!empty($request->status_id))
        {
            $query->where('status_id', $request->status_id);
        }
        
        if ($request->has('client_id')) {
            $query->where('client_id', $request->client_id);
        }

        if ($request->has('staff_id')) {
            $query->whereHas('team', function($q) use ($request){
                return $q->where('user_id', $request->staff_id)->where('user_type', Staff::class);
            });
        }

        if ($request->has('date') ) {
            $date = explode(' - ', $request->date);
            $query->whereDate('expiry_date', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('expiry_date', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $query->with('client','items')->paginate(100);
    }

    public function find($estimateId)
    {
        $user = Auth::user();

        $estimate = Estimate::forBusiness($user->business_id ?? 0);

        return $estimate->with('client','items')->find($estimateId);
    }


    public function createEstimate(array $data)
    {
        $estimate = Estimate::create($data);

        if (isset($data['items']))
        {
            foreach ($data['items'] as $key => $item) {
                $item['item_type'] = $item['model_type'];
                $item['item_id'] = $item['model_id'];
                $item['unit_price'] = $item['price'];
                $item['business_id'] = $estimate->business_id;
                $item['estimate_id'] = $estimate->id;
                $saveItem = EstimateItem::create($item);
            }
        }

        return $estimate;
        
    }

    public function updateEstimate($id, array $data)
    {
        $estimate = Estimate::findOrFail($id);
        $estimate->update($data);
        return $estimate;
    }

    public function deleteEstimate($id)
    {
        $estimate = Estimate::findOrFail($id);
        return $estimate->delete();
    }

    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Estimate::class)->orderBy('sort', 'ASC')->get();
    }

}
