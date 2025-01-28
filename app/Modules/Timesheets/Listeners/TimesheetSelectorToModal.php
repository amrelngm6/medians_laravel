<?php

namespace App\Modules\Timesheets\Listeners;

use App\Modules\Timesheets\Models\Timesheet;
use App\Models\Auth;

class TimesheetSelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $timesheet = Timesheet::forBusiness([$user->business_id ?? 0, 0])->find($event->model->id() ?? 0);
        $model = $event->model ?? null;
        $event->context['components'][] = view('timesheet::timesheet-selector', compact( 'user', 'timesheet', 'model'))->render();
        return $event;
    }
}
