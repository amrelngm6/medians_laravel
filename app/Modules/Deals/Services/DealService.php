<?php

namespace App\Modules\Deals\Services;

use App\Modules\Deals\Models\Deal;
use App\Modules\Deals\Models\DealStage;
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

    public function findStage(int $id)
    {
        return DealStage::findOrFail($id);
    }

    public function createDeal(array $data)
    {
        return Deal::create($data);
    }

    public function createStage(array $data)
    {
        return DealStage::create($data);
    }

    public function updateDeal($id, array $data)
    {
        $deal = $this->find($id);
        $deal->update($data);
        return $deal;
    }

    public function updateStage($id, array $data)
    {
        $stage = $this->findStage($id);
        $stage->update($data);
        return $stage;
    }

    public function deleteDeal($id)
    {
        $deal = $this->find($id);
        return $deal->delete();
    }

    public function deleteStage($id)
    {
        $stage = $this->findStage($id);
        return $stage->delete();
    }
}
