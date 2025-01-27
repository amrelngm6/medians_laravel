<?php

namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Tasks\Services\TaskChecklistService;
use App\Modules\Tasks\Services\TaskService;
use App\Modules\NLP\Services\HuggFaceService;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class TaskChecklistController extends Controller
{
    protected $taskChecklistService;

    public function __construct(TaskChecklistService $taskChecklistService)
    {
        $this->taskChecklistService = $taskChecklistService;
        $this->taskService = new TaskService();
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


    public function store(Request $request, $task_id)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'task_id' => 'required',
                'description' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            $creator = ['created_by'=>$user->staff_id, 'business_id'=>$user->business_id];

            // Create and save the Task
            $task = $this->taskChecklistService->createItem(array_merge($creator, $request->only('task_id','description','finished','finished_date','points','sort','user_id','visible_to_client','status')));

            return $task ? $this->jsonResponse(null, null, false) : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function update(Request $request, $id)
    {
        
        try {
            
            $data = [

                'status' => $request->status ?? 0,
                'finished' => $request->status ?? 0,
                'finished_date' => $request->status ? date('Y-m-d') : null
            ];

            // Update the Task
            $task = $this->taskChecklistService->updateItem($id, array_merge($data, $request->only('description','finished','finished_date','points','sort','user_id','visible_to_client','status')));

            return $task ? $this->jsonResponse(null) : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function update_sort(Request $request)
    {
        try {
            
            $user = Auth::user();
            
            foreach ($request->sortedIDs as $key => $value) {
                $task = $this->taskChecklistService->updateItem($value, ['sort'=>$key]);
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
            $delete = $this->taskChecklistService->deleteItem($id);

            return $delete ? $this->jsonResponse(null, null) : null;
                    
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }



    
    /**
     * Generate tasks checklist for Task using AI
     * @param Request $request
     * @param $task_id
     * @return String
     */
    public function generateTaskChecklist(Request $request, $task_id)
    {
        $user = Auth::user();
        
        $task = $this->taskService->find($task_id); 

        $message = 'could you give me json list for tasks to '.$task->description.' for my CRM in laravel. Please make the response json only , and as short as possible';

        $nlpService = new HuggFaceService;
        $response = $nlpService->generateText($message, $request->model);

        error_log(json_encode($response));
        
        if (is_array($response)) {
            $taskList = [];
            $taskList['user_id'] = $user->id();
            $taskList['business_id'] = $user->business_id ?? 0;
            $taskList['task_id'] = $task_id;
            $taskList['finished'] = 0;
            $taskList['finished_date'] = null;
            $taskList['points'] = 1;
            $taskList['visible_to_client'] = 1;
            $tasjList['status'] = 0;
            
            foreach ($response as $key => $value) 
            {
                $taskList['sort'] = $key;
                $taskList['description'] = $value['task'] ?? $value;

                $save = $this->taskChecklistService->createItem($taskList);
            }

            return true;
        }
        
        return $this->jsonResponse('Error generating task checklist' . $response);
    }
}
