<?php

namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Modules\Deals\Services\DealService;
use App\Modules\Deals\Models\Deal;
use App\Modules\Tasks\Services\TaskService;
use App\Modules\Tasks\Models\Task;
use App\Modules\Customers\Services\StaffService;
use App\Models\Auth;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;

class DealTasksController extends TaskController
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    
    public function create_deal_task(Request $request, $id)
    {
        $dealService = new DealService;
        $deal = $dealService->find($id);

        $model_type = Deal::class;       
        $model_id = $id;       
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, new $this->taskService->model));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 

        // List tasks
        return view('tasks::add-task-modal', compact('model_id', 'model_type', 'deal','components','custom_fields'));
    }

    public function edit_deal_task(Request $request, $id)
    {
        $model_type = Deal::class;       
        $model_id = $id;       
        
        $task = $this->taskService->find($id);
        $deal = $task->deal ?? null;
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, $task));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 
        
        // List tasks
        return view('tasks::edit-task-modal', compact('model_id', 'model_type', 'deal',  'task','components', 'custom_fields'));
    }

    public function edit_field(Request $request, $id, $field)
    {
        
        $task = $this->taskService->find($id);
        $deal = $task->deal ?? null;
        $modalRoute = route('Tasks.deal_task', $id);
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, $task));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 
        
        // List tasks
        return view('tasks::edit-form-wrapper', compact('deal', 'modalRoute', 'task','components', 'custom_fields', 'field'));
    }

    

    public function deal_task(Request $request, $id)
    {
        $StaffService = new StaffService;
        $team = $StaffService->query();

        $model_type = Task::class;   
        $model_id = $id;
        $modalRoute = route('Tasks.deal_task', $id);
        
        $task = $this->taskService->find($id);

        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskModalRendering($context, $task));
        $components = $event[0]->context['components'];

        // List tasks
        return view('tasks::task-modal', compact('model_id', 'model_type', 'task','team','modalRoute', 'components'));
    }

    
    /**
     * Show the form for updating a Note.
     */
    public function deal(Request $request, $id)
    {
        $dealService = new DealService;
        $deal = $dealService->find($id);

        $dealTabs = $this->loadModuleTabs('Deal.tabs');

        $tasks = $this->taskService->query($request, $deal->id, get_class($deal));

        $statusList = $this->taskService->loadStatusList();

        return view('tasks::deal', ['deal'=> $deal, 'modelId'=> $deal->id, 'modelType'=> get_class($deal), 'tasks'=>$tasks, 'dealTabs' => $dealTabs, 'statusList'=>$statusList ]);
    }
    
    /**
     * Show the form for updating a Note.
     */
    public function deal_filter(Request $request, $id)
    {
        $dealService = new DealService;
        $deal = $dealService->find($id);

        $tasks = $this->taskService->query($request, $deal->id, get_class($deal));

        $statusList = $this->taskService->loadStatusList();

        return view('tasks::deal-tasks', ['deal'=> $deal, 'modelId'=> $deal->id, 'modelType'=> get_class($deal), 'tasks'=>$tasks, 'statusList'=>$statusList ]);
    }

}
