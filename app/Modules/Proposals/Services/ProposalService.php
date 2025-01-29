<?php

namespace App\Modules\Proposals\Services;

use App\Modules\Proposals\Models\Proposal;
use App\Modules\Proposals\Models\ProposalItem;
use App\Modules\Core\Models\Status;
use App\Models\Auth;

class ProposalService
{
    
    public function get()
    {
        $user = Auth::user();

        $Proposals = Proposal::forBusiness($user->business_id ?? 0);

        return $Proposals->with('user','items')->paginate(100);
    }
    
    /**
     * Filter Proposals based on request
     * 
     * @param Request $request
     * @param int $modelId
     * @param string $modelType
     * 
     * @return Collection
     */
    public function query($request, $modelId = null, $modelType = null)
    {
        $query = Proposal::query();

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
            $query->whereDate('date', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('date', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        if ($request->has('expiry_date') ) {
            $date = explode(' - ', $request->date);
            $query->whereDate('expiry_date', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('expiry_date', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $query->with('user','items')->paginate(100);
    }

    public function find($proposalId)
    {
        $user = Auth::user();

        $proposal = Proposal::forBusiness($user->business_id ?? 0);

        return $proposal->with('user','items')->find($proposalId);
    }


    public function createProposal(array $data)
    {
        $proposal = Proposal::create($data);

        if (isset($data['items']))
        {
            foreach ($data['items'] as $key => $item) {

                $item['description'] = $item['description'] ?? '';
                $item['item_type'] = $item['model_type'];
                $item['item_id'] = $item['model_id'];
                $item['unit_price'] = $item['price'];
                $item['business_id'] = $proposal->business_id;
                $item['proposal_id'] = $proposal->id;
                $saveItem = ProposalItem::create($item);
            }
        }

        return $proposal;
        
    }

    public function updateProposal($id, array $data)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->update($data);
        return $proposal;
    }

    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Proposal::class)->get()->unique('status_id');
    }

}
