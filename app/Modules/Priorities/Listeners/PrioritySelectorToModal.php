<?php

namespace App\Modules\Priorities\Listeners;

use App\Modules\Priorities\Models\Priority;
use App\Modules\Tickets\Models\Ticket;
use App\Modules\Tasks\Models\Task;
use App\Models\Auth;

class PrioritySelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $priority = Priority::default([$user->business_id ?? 0, 0])->find($event->model->priority_id ?? 0);
        $model = $event->model ?? null;
        $route = '';
        if (get_class($model) == Task::class) {
            $route =  route('Tasks.edit_priority_field',$model->id());
        }
        if (get_class($model) == Ticket::class) {
            $route =  route('Priority.edit_field',$model->id());
        }
        $event->context['components'][] = view('priority::priority-info', compact( 'priority', 'model', 'route'))->render();
        return $event;
    }
}
