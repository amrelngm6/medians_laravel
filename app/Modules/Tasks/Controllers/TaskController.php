<?php

namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Tasks\Services\TaskService;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskSaved;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class TaskController extends Controller
{
    protected $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $statusList = $this->service->loadStatusList();   
        $types = $this->service->model->forBusiness($user->business_id)->get()->select('model_type')->unique('model_type');
        return view('tasks::list', compact('statusList', 'types'));
    }

    
    public function filter(Request $request)
    {
        $tasks = $this->service->query($request, null, $request->model_type)->orderBy('task_id', 'DESC')->get();   

        return view('tasks::rows', compact('tasks'));
    }


    public function calendar(Request $request)
    {
        $tasks = $this->service->query($request)->orderBy('task_id', 'DESC')->get();    // List tasks

        // List tasks
        return view('tasks::calendar', compact('tasks'));
    }

    public function kanban(Request $request)
    {
        $user = Auth::user();
        $statusList = $this->service->loadStatusList();   
        $types = $this->service->model->forBusiness($user->business_id)->get()->select('model_type')->unique('model_type');
        return view('tasks::kanban', compact('statusList', 'types'));
    }
    
    public function filterKanban(Request $request)
    {
        
        $tasks = $this->service->query($request, null, $request->model_type)->orderBy('sort')->get();

        $statusList = $this->service->loadStatusList();

        return view('tasks::kanban-tasks', ['tasks'=>$tasks, 'statusList'=>$statusList ]);
    }
    
    public function filterJson(Request $request)
    {
        
        $tasks = $this->service->query($request)->get();   

        $data = [];
        foreach ($tasks as $key => $task) {

            $data[$key]['model_name'] = class_basename($task->model);
            $data[$key]['title'] = $task->name;
            $data[$key]['description'] = isset($task->status->name) ? "<b class='text-primary'>".$task->status->name."</b> " : "";
            $data[$key]['description'] .= $task->description;
            $data[$key]['start'] = $task->start_date;
            $data[$key]['end'] = $task->due_date;
            $data[$key]['url'] = route('Tasks.project_task', $task->task_id);
            $color = $task->status->color ?? 'primary';
            $data[$key]['classNames'] = ["bg-".$color, 'p-1'];
            $data[$key]['borderColor'] = 'white';
            $data[$key]['textColor'] = 'white';

            # code...
        }
        return $data;
    }

    
    public function create(Request $request)
    {
        $user = Auth::user();

        $model_type = get_class($user);       
        $model_id = $user->id();       
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, new $this->service->model));
        $components = $event[0]->context['components'];
        $custom_fields = $this->service->loadModelFields(); 

        // List tasks
        return view('tasks::add-task-modal', compact('model_id', 'model_type', 'components','custom_fields'));
    }

    
    public function duplicateModal(Request $request, $id)
    {
        $user = Auth::user();

        $task = $this->service->find($id);

        $model_type = get_class($user);       
        $model_id = $user->id();       
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, new $this->service->model));
        $components = $event[0]->context['components'];
        $custom_fields = $this->service->loadModelFields(); 

        // List tasks
        return view('tasks::duplicate-task-modal', compact('task','model_id', 'model_type', 'components','custom_fields'));
    }

    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'status_id' => 'required|integer|min:1',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            $creator = ['created_by'=>$user->staff_id, 'business_id'=>$user->business_id];

            // Create and save the Task
            $task = $this->service->createTask(array_merge($creator, $request->only('name','description','model_id','model_type','start_date','due_date','finished_date','priority_id','is_public','is_paid','points','sort','visible_to_client','status_id','custom_field')));

            event(new TaskSaved($request, $task));

            return $task ? $this->jsonResponse('Created successfully', 'Done', false) : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    /**
     * Add team member to task
     */
    public function add_team(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'staff_id' => 'required|integer',
                'user_type' => 'required|string|max:255',
                // 'status' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();
            $creator = [
                'user_id' => $request->staff_id ?? $request->user_id,
                'created_by' => $user->staff_id
            ];

            // Create and save the Task
            $task = $this->service->createTeam(array_merge($creator, $request->only('model_id', 'model_type','user_type')));

            return $task ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }
    
    /**
     * Remove team member from task
     */
    public function delete_team(Request $request, $id)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'model_id' => 'required|integer',
                'id' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            

            // Create and save the Task
            $task = $this->service->deleteTeam($request->only('model_id','id'));

            return $task ? $this->jsonResponse('Removed successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function show($projectId, $id)
    {
        // Show details for a specific task
    }

    public function update(Request $request, $id)
    {
        
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                // 'name' => 'required|string|max:255',
                // 'description' => 'required|string|max:255',
                // 'status' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Update the Task
            $task = $this->service->updateTask($id, $request->only('name','description','start_date','due_date','finished_date','priority_id','is_public','is_paid','points','sort','visible_to_client','status_id','custom_field'));

            event(new TaskSaved($request, $task));

            return response()->json([
                'success' => true,
                'title' => 'Done',
                'no_reset' => 1,
                'message' => 'Updated successfully',
            ], 201);
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function updateOrder(Request $request)
    {
        try {
            
            $user = Auth::user();
            
            foreach ($request->sortedIDs as $key => $value) {
                $task = $this->service->updateTask($value, ['sort'=>$key, 'status_id' => $request->status_id]);
            }

            return $task ? $this->jsonResponse('Updated successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function destroy(Request $request, $id)
    {
        try {

            // Delete a task from the specified project
            $delete = $this->service->deleteTask($id);

            return $delete ? $this->jsonResponse('Updated successfully', 'Done', route('Tasks')) : null;
                    
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    /**
     * Duplicate a task
     *  
     */
    public function duplicate(Request $request, $id)
    {
        try 
        {
            // $relations = array_keys($request->only('modules')) ?? ['comments', 'checklist', 'team', 'files'];
            $relations = $request->only('modules')['modules'] ?? [];
            
            $task = $this->service->duplicateWithRelations($request->id, $relations);

            return $task ? $this->jsonResponse('Task duplicated','Done', true) : null;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

}
