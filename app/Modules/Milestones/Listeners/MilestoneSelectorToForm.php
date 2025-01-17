<?php

namespace App\Modules\Milestones\Listeners;

use App\Modules\Milestones\Models\Milestone;
use App\Models\Auth;

class MilestoneSelectorToForm
{
    public function handle($event)
    {
        $user = Auth::user();
        $milestones = Milestone::forBusiness([$user->business_id ?? 0, 0])->get();
        $model = $event->model ?? null;
        $event->context['components']['milestone'] = view('milestones::milestone-selector', compact('milestones', 'model'))->render();
        return $event;
    }
}
