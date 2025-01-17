<?php

namespace App\Modules\Priorities\Listeners;

use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;

class PrioritySelectorToForm
{
    public function handle($event)
    {
        $user = Auth::user();
        $priorities = Priority::default([$user->business_id ?? 0, 0])->where('model', $event->model ? get_class($event->model) : null)->get();
        $model = $event->model ?? null;
        $event->context['components']['priority'] = view('priority::priority-selector', compact('priorities', 'model'))->render();
        return $event;
    }
}
