<?php

namespace App\Modules\Core\Listeners;

use App\Modules\Core\Models\Status;
use App\Models\Auth;

class StatusSelectorToTicket
{
    public function handle($event)
    {
        $user = Auth::user();
        $status = Status::default([$user->business_id ?? 0, 0])->find($event->model->status_id ?? 0);
        $model = $event->model ?? null;
        $event->context['components'][] = view('status.status-info-ticket', compact('status', 'model'))->render();
        return $event;
    }
}
