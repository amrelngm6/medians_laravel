<?php

namespace App\Modules\Core\Services;

use App\Modules\Core\Models\Status;
use App\Models\Auth;

class StatusService
{

    public function query()
    {
        // Status logic for creating a Status
        return Status::forBusiness(Auth::user()->business_id ?? 0)->get();
    }


    public function createStatus(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;
        $data['created_by'] = Auth::user()->id();

        // Status logic for creating a Status
        return Status::firstOrCreate($data);

    }


    public function updateStatus(array $data)
    {
        // Find the Item
        $Status = $this->find($data['status_id']);

        // Update Item details
        return $Status->update($data);
    }

    public function deleteStatus($id)
    {
        // Status logic for deleting a Status
        $Status = $this->find($id);

        return $Status->delete();
    }

    public function find($id)
    {
        return  Status::forBusiness(Auth::user()->business_id ?? 0)->findOrFail($id);
    }
}
