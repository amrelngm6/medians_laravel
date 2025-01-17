<?php

namespace App\Modules\Core\Listeners;

use App\Modules\Core\Models\Status;
use App\Models\Auth;

class AddStatusSelectorToForm
{
    public function handle($event)
    {
        $user = Auth::user();
        $statusList = Status::default([$user->business_id ?? 0, 0])->where('model', get_class($event->model) ?? null)->get();
        $model = $event->model ?? null;
        $event->context['components'][] = view('status.status-selector', compact('statusList', 'model'))->render();
        return $event;
    }
}
