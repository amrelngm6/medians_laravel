<?php

namespace App\Modules\Core\Listeners;

use App\Modules\Core\Models\Status;
use App\Models\Auth;

class StatusSelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $status = Status::default([$user->business_id ?? 0, 0])->where('status_id',$event->model->status_id ?? '0')->first();
        $model = $event->model ?? null;
        $event->context['components'][] = view('status.status-info', compact('status', 'model'))->render();
        return $event;
    }
}
