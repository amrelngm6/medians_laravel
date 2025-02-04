<?php

namespace App\Modules\Tasks\Listeners;

use App\Modules\Tasks\Models\Task;
use App\Modules\Tasks\Services\TaskService;
use App\Models\Auth;

class DealReportWidget
{
    public function handle($event)
    {

        $taskService = new TaskService(new Task);
        $statusList = $taskService->loadStatusList();
        $user = Auth::user();
        $model = $event->model;
        $event->context['components']['widget'] = view('tasks::components.projects-tasks-report', compact('model', 'statusList'))->render();
        return $event;
    }
}
