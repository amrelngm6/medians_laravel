<?php

namespace App\Modules\Core\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;

use App\Http\Controllers\Controller;

use App\Modules\Core\Services\StatusService;
use App\Modules\Tasks\Services\TaskService;

class StatusController extends Controller
{
    
    protected $statusService;

    public function __construct(StatusService $statusService)
    {
        $this->statusService = $statusService;
    }


    /**
     * Display a listing of Status.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        if ($user->cannot('StatusList view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $StatusList = $this->statusService->query($request);
        
        return view('status.list', compact('StatusList'));
    }

    /**
     * Display a overview of Status.
     */
    public function overview(Request $request, $id)
    {
        if ($request->user()->cannot('StatusList view')) {
            abort(403, 'Unauthorized');
        }

        $StatusList = $this->statusService->find($id);
        
        return view('status.overview', compact('Status'));
    }

    
    /**
     * Show the form for creating a new Status.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('StatusList create')) {
            abort(403, 'Unauthorized');
        }

        return view('includes.modals.new-status-modal');
    }


    /**
     * Store a newly created StatusList in the database.
     */
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
        
        // Create and save the Status
        $source = $this->statusService->createStatus(array_merge($request->only('name', 'model','sort','color'), ['created_by' => auth()->user()->staff_id]));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }
    

    /**
     * Update the specified StatusList in the database.
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
        
        $update = $this->statusService->updateStatus($request->only('name', 'model','sort','color', 'status_id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified StatusList from the database.
     */
    public function destroy($id)
    {
        
        
        $delete = $this->statusService->deleteStatus($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Status deleted successfully',
        ], 200) : null;
    }


    

    /**
     * Show the form for creating a new Priority.
     */
    public function edit_task_field(Request $request, $id)
    {
        $taskService = new TaskService;
        $model = $task = $taskService->find($id);

        $statusList = $this->statusService->query();

        $field = 'status.status-selector';
        
        $modalRoute = route('Tasks.project_task', $id);

        return view('tasks::edit-form-wrapper', compact('field','statusList', 'model', 'task', 'modalRoute'));
    }

}
