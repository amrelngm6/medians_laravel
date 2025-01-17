<?php

namespace App\Modules\Estimates\Services;

use App\Modules\Estimates\Models\Estimate;
use App\Modules\Estimates\Models\EstimateItem;
use App\Modules\Core\Models\Status;
use App\Models\Auth;

class EstimateService
{
    
    public function get()
    {
        $user = Auth::user();

        $Leads = Estimate::forBusiness($user->business_id ?? 0);

        return $Leads->with('client','items')->paginate(100);
    }
    
    public function query($modelId, $modelType)
    {
        $Leads = Estimate::query();

        return $Leads->where("model_id", $modelId)->where('model_type', $modelType)->with('client','items')->paginate(100);
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
                $item['unit_price'] = $item['price'];
                $item['business_id'] = $estimate->business_id;
                $item['estimate_id'] = $estimate->estimate_id;
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

    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Estimate::class)->orderBy('sort', 'ASC')->get();
    }

}
