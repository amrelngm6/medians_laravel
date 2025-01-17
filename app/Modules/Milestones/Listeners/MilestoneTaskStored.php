<?php

namespace App\Modules\Milestones\Listeners;

use App\Modules\Milestones\Models\Milestone;
use App\Models\Auth;

class MilestoneTaskStored
{
    public function handle($event)
    {
        $request = $event->request;
        
        $task = $event->context;
        $task->milestone_id = $request->milestone_id;
        return $task->save();
    }
}
