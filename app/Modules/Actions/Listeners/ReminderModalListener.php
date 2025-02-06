<?php

namespace App\Modules\Actions\Listeners;

use App\Modules\Actions\Models\Reminder;
use App\Modules\Tasks\Models\Task;
use App\Models\Auth;

class ReminderModalListener
{
    public function handle($event)
    {
        $user = Auth::user();
        $model = $event->model;
        $reminders = Reminder::forBusiness([$user->business_id ?? 0, 0])->where([
            "model_id"=> $model->{$model->getKeyName()} ?? 0,
            "model_type"=> get_class($model),
        ])->get();

        $route = '';
        $event->context['components'][] = view('reminders::modal-info', compact('reminders', 'model', 'route'))->render();
        return $event;
    }
}
