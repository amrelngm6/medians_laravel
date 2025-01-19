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

        $Leads = Proposal::forBusiness($user->business_id ?? 0);

        return $Leads->with('client','items')->paginate(100);
    }
    
    public function query($modelId, $modelType)
    {
        $Leads = Proposal::query();

        return $Leads->where("model_id", $modelId)->where('model_type', $modelType)->with('client','items')->paginate(100);
    }

    public function find($proposalId)
    {
        $user = Auth::user();

        $proposal = Proposal::forBusiness($user->business_id ?? 0);

        return $proposal->with('client','items')->find($proposalId);
    }


    public function createProposal(array $data)
    {
        $proposal = Proposal::create($data);

        if (isset($data['items']))
        {
            foreach ($data['items'] as $key => $item) {
                $item['unit_price'] = $item['price'];
                $item['business_id'] = $proposal->business_id;
                $item['proposal_id'] = $proposal->proposal_id;
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
        return Status::default([Auth::user()->business_id, '0'])->where('model', Proposal::class)->orderBy('sort', 'ASC')->get();
    }

}
