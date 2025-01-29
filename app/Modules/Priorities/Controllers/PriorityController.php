<?php

namespace App\Modules\Priorities\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;
use App\Modules\Priorities\Services\PriorityService;
use App\Modules\Tasks\Services\TaskService;
use App\Http\Controllers\Controller;

class PriorityController extends Controller
{

    protected $priorityService;

    public function __construct(PriorityService $priorityService)
    {
        $this->priorityService = $priorityService;
    }

    
    /**
     * Display a listing of Proprities.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        if (!$user || $user->cannot('Priority view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $Priorities = $this->priorityService->query($request);
        
        return view('priority::list', compact('Priorities'));
    }



    /**
     * Show the form for creating a new Priority.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Priority create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $model = $request->model ?? '';

        return view('priority::new-priority-modal', compact('model'));
    }


    /**
     * Show the form for creating a new Priority.
     */
    public function edit_task_field(Request $request, $id)
    {
        $taskService = new TaskService;
        $model = $task = $taskService->find($id);

        $priorities = $this->priorityService->query();

        $field = 'priority::priority-selector';
        
        $modalRoute = route('Tasks.project_task', $id);

        return view('tasks::edit-form-wrapper', compact('field','priorities', 'model', 'task', 'modalRoute'));
    }


    public function store(Request $request)
    {
        
        $user = Auth::user();

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = Auth::user();

        $info = ['created_by' => $user->id(), 'business_id'=> $user->business_id ?? 0];

        // Create and save the Priority
        $source = $this->priorityService->createPriority(array_merge($request->only('name', 'model','sort','color'), $info));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        // Display a single Priority
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Priority edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }   

        $priority = $this->priorityService->find($id);

        return view('priority::edit-priority-modal', compact('priority'));
    }

    /**
     * Update the specified Priority in the database.
     */
    public function update(Request $request, $id)
    {
        
        // Validate updated data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $update ? response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402) : null;
        }
        
        $update = $this->priorityService->updatePriority($id, $request->only('name', 'model','sort','color', 'priority_id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified Proprities from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->priorityService->deletePriority($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Priority deleted successfully',
        ], 200) : null;
    }
}
