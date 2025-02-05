<?php

namespace App\Modules\Actions\Listeners;

use App\Modules\Actions\Models\Reminder;
use App\Modules\Tasks\Models\Task;
use App\Models\Auth;

class ReminderToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        print_r($user);
        print_r('$user');
        // $reminders = Reminder::forBusiness([$user->business_id ?? 0, 0])->where([
        //     "model_id"=> $event->model->{$event->model->getKeyName()} ?? 0,
        //     "model_type"=> get_class($event->model),
        // ])->get();

        // $route = '';
        // if (get_class($model) == Task::class) {
        //     // $route =  route('Tasks.edit_priority_field',$model->id());
        // }
        // // if (get_class($model) == Ticket::class) {
        // //     $route =  route('Priority.edit_field',$model->id());
        // // }
        // $event->context['components'][] = view('reminders::modal-info', compact('reminders', 'model', 'route'))->render();
        // return $event;
    }
}
