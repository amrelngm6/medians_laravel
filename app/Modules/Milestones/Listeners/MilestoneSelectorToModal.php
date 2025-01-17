<?php

namespace App\Modules\Milestones\Listeners;

use App\Modules\Milestones\Models\Milestone;
use App\Models\Auth;

class MilestoneSelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $milestone = Milestone::default([$user->business_id ?? 0, 0])->find($event->model->milestone_id ?? 0);
        $model = $event->model ?? null;
        $event->context['components'][] = view('milestones::milestone-info', compact( 'milestone', 'model'))->render();
        return $event;
    }
}
