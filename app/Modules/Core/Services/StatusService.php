<?php

namespace App\Modules\Core\Services;

use App\Modules\Core\Models\Status;
use App\Models\Auth;

class StatusService
{

    public function query()
    {
        // Status logic for creating a Status
        return Status::forBusiness(Auth::user()->business_id ?? 0)->get()->groupBy('name');
    }


    public function createStatus(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;
        $data['created_by'] = Auth::user()->id();
        if (is_array($data['model'])) {
            foreach ($data['model'] as $key => $value) {
                $data['model'] = $value;
                // Status logic for creating a Status
                $saved = Status::firstOrCreate($data);
            }
            return $saved;
        } else {
            return Status::firstOrCreate($data);
        }

    }


    public function updateStatus(array $data)
    {
        // Clear old Items
        $Status =  Status::forBusiness(Auth::user()->business_id ?? 0)
        ->where('name', $data['name'])
        ->whereNotIn('model', $data['model'])
        ->delete();
        
        return $this->createStatus($data);

    }

    public function deleteStatus($id)
    {
        // Status logic for deleting a Status
        $Status = $this->find($id);

        return $Status->delete();
    }

    public function find($id)
    {
        return  Status::forBusiness(Auth::user()->business_id ?? 0)->with('models')->where( 'status_id',  $id ?? '0')->first();
    }
}
