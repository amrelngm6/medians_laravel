<?php

namespace App\Modules\Priorities\Listeners;

use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;

class PrioritySelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $priority = Priority::default([$user->business_id ?? 0, 0])->find($event->model->priority_id ?? 0);
        $model = $event->model ?? null;
        $event->context['components'][] = view('priority::priority-info', compact( 'priority', 'model'))->render();
        return $event;
    }
}
