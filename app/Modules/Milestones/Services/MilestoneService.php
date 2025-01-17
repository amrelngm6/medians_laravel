<?php

namespace App\Modules\Milestones\Services;

use App\Modules\Milestones\Models\Milestone;
use App\Models\Auth;

class MilestoneService
{
    public function createMilestone(array $data)
    {
        return Milestone::create($data);
    }

    public function updateMilestone($id, array $data)
    {
        $milestone = Milestone::findOrFail($id);
        return $milestone->update($data);
    }

    public function deleteMilestone($id)
    {
        $milestone = Milestone::findOrFail($id);
        return $milestone->delete();
    }

    public function query($request)
    {
        $user = Auth::user(); 
        return Milestone::forBusiness($user->business_id ?? 0)->get();
    }

    public function modules()
    {
        // Business logic for retrieving modules
    }

    public function find($id)
    {
        return Milestone::findOrFail($id);
    }
}
