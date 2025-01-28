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
        }

        $statusList = $this->taskService->loadStatusList();   
        $staffList = $this->taskService->loadStatusList();   
        return view('tasks::list', compact('statusList'));
    }

    
    public function filter(Request $request)
    {
        
        $tasks = $this->taskService->query($request);   

        return view('tasks::rows', compact('tasks'));
    }

    
    public function create(Request $request)
    {
        $user = Auth::user();

        $model_type = get_class($user);       
        $model_id = $user->id();       
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, new $this->taskService->model));
        $components = $event[0]->context['components'];
        $custom_fields = $this->taskService->loadModelFields(); 

        // List tasks
        return view('tasks::add-task-modal', compact('model_id', 'model_type', 'components','custom_fields'));
    }

    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            $creator = ['created_by'=>$user->staff_id, 'business_id'=>$user->business_id];

            // Create and save the Task
            $task = $this->taskService->createTask(array_merge($creator, $request->only('name','description','model_id','model_type','start_date','due_date','finished_date','priority_id','is_public','is_paid','points','sort','visible_to_client','status_id','custom_field')));

            event(new TaskSaved($request, $task));

            return $task ? $this->jsonResponse('Created successfully', 'Done', true) : null;
            
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
                'user_id' => $user->staff_id ?? $user->user_id,
                'created_by' => $user->staff_id
            ];

            // Create and save the Task
            $task = $this->taskService->createTeam(array_merge($creator, $request->only('model_id', 'model_type','user_type', 'staff_id')));

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
            $task = $this->taskService->deleteTeam($request->only('model_id','id'));

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
            $task = $this->taskService->updateTask($id, $request->only('name','description','start_date','due_date','finished_date','priority_id','is_public','is_paid','points','sort','visible_to_client','status_id','custom_field'));

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
                $task = $this->taskService->updateTask($value, ['sort'=>$key, 'status_id' => $request->status_id]);
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
            $delete = $this->taskService->deleteTask($id);

            return $delete ? $this->jsonResponse('Updated successfully', 'Done', route('Tasks')) : null;
                    
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }
}
