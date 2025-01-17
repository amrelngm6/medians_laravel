<?php

namespace App\Modules\Priorities\Services;

use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;

class PriorityService
{
    public function query()
    {
        $user = Auth::user();

        return Priority::default([$user->business_id ?? 0 , 0])->get();
    }

    public function find(int $id)
    {
        return Priority::findOrFail($id);
    }

    public function createPriority(array $data)
    {
        return Priority::create($data);
    }

    public function updatePriority($id, array $data)
    {
        $priority = $this->find($id);
        $priority->update($data);
        return $priority;
    }

    public function deletePriority($id)
    {
        $priority = $this->find($id);
        return $priority->delete();
    }
}
