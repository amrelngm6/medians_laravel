<?php

namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Modules\Projects\Services\ProjectService;
use App\Modules\Projects\Models\Project;
use App\Modules\Tasks\Services\TaskService;
use App\Modules\Tasks\Models\Task;
use App\Modules\Customers\Services\StaffService;
use App\Models\Auth;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;

class ProjectTasksController extends TaskController
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index(Request $request)
    {
        // List tasks
        switch ($request->get('view')) {
            case 'kanban':
                return view('tasks::kanban');
                break;
            
            default:
                return view('tasks::list');
                break;
        }
    }

    public function create_project_task(Request $request, $id)
    {
        $projectService = new ProjectService;
        $project = $projectService->find($id);

        $model_type = Project::class;       
        $model_id = $id;       
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, new $this->taskService->model));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 

        // List tasks
        return view('tasks::add-task-modal', compact('model_id', 'model_type', 'project','components','custom_fields'));
    }

    public function edit_project_task(Request $request, $id)
    {
        $model_type = Project::class;       
        $model_id = $id;       
        
        $task = $this->taskService->find($id);
        $project = $task->project ?? null;
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, $task));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 
        
        // List tasks
        return view('tasks::edit-task-modal', compact('model_id', 'model_type', 'project',  'task','components', 'custom_fields'));
    }

    public function edit_field(Request $request, $id, $field)
    {
        
        $task = $this->taskService->find($id);
        $project = $task->project ?? null;
        $modalRoute = route('Tasks.project_task', $id);
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, $task));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 
        
        // List tasks
        return view('tasks::edit-form-wrapper', compact('project', 'modalRoute', 'task','components', 'custom_fields', 'field'));
    }

    

    public function project_task(Request $request, $id)
    {
        $StaffService = new StaffService;
        $team = $StaffService->query();

        $model_type = Task::class;   
        $model_id = $id;
        $modalRoute = route('Tasks.project_task', $id);
        
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
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $tasks = $this->taskService->query($request, $project->project_id, get_class($project))->orderBy('sort')->get();

        $statusList = $this->taskService->loadStatusList();

        return view('tasks::project', ['project'=> $project, 'modelId'=> $project->project_id, 'modelType'=> get_class($project), 'tasks'=>$tasks, 'projectTabs' => $projectTabs, 'statusList'=>$statusList ]);
    }
    
    /**
     * Show the form for updating a Note.
     */
    public function project_filter(Request $request, $id)
    {
        $projectService = new ProjectService;
        $project = $projectService->find($id);

        $tasks = $this->taskService->query($request, $project->project_id, get_class($project))->orderBy('sort')->get();

        $statusList = $this->taskService->loadStatusList();

        return view('tasks::kanban-tasks', ['project'=> $project, 'modelId'=> $project->project_id, 'modelType'=> get_class($project), 'tasks'=>$tasks, 'statusList'=>$statusList ]);
    }

}
