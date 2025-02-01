<?php

namespace App\Modules\Timesheets\Listeners;

use App\Modules\Timesheets\Models\Timesheet;
use App\Modules\Projects\Models\Project;
use App\Modules\Deals\Models\Deal;
use App\Models\Auth;

class TimesheetSelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $timesheet = Timesheet::forBusiness($user->business_id ?? 0)
        ->where("end", null)
        ->where('model_id', $event->model->id())->where('model_type', get_class($event->model))->first();
        $model = $event->model ?? null;
        $modalRoute ='';
        if (get_class($event->model->model) == Project::class) {
            $modalRoute = route('Tasks.project_task', $event->model->id());
        }

        if (get_class($event->model->model) == Deal::class) {
            $modalRoute = route('Tasks.deal_task', $event->model->id());
        }

        $event->context['components'][] = view('timesheet::timesheet-selector', compact('modalRoute', 'user', 'timesheet', 'model'))->render();
        return $event;
    }
}
