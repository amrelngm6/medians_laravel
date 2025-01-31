<?php

namespace App\Modules\Deals\Services;

use App\Modules\Deals\Models\Deal;
use App\Models\Auth;

class DealService
{
    public function query()
    {
        $user = Auth::user();

        return Deal::default([$user->business_id ?? 0 , 0])->get();
    }

    public function find(int $id)
    {
        return Deal::findOrFail($id);
    }

    public function createDeal(array $data)
    {
        $deal = Deal::firstOrCreate($data);
        
        return $deal;   
    }

    

    public function updateDeal($id, array $data)
    {
        $deal = $this->find($id);
        $deal->update($data);
        return $deal;
    }
    
    public function deleteDeal($id)
    {
        $deal = $this->find($id);
        return $deal->delete();
    }

}
