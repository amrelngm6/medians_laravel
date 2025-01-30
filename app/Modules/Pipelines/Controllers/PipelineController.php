<?php

namespace App\Modules\Pipelines\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;
use App\Modules\Pipelines\Services\PipelineService;
use App\Modules\Tasks\Services\TaskService;
use App\Http\Controllers\Controller;

class PipelineController extends Controller
{

    protected $pipelineService;

    public function __construct(PipelineService $pipelineService)
    {
        $this->pipelineService = $pipelineService;
    }

    
    /**
     * Display a listing of Proprities.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        // if (!$user || $user->cannot('Pipelines view') && Auth::guardName() != 'superadmin') {
        //     abort(401, 'Unauthorized');
        // }

        $Pipelines = $this->pipelineService->query($request);
        
        return view('pipeline::list', compact('Pipelines'));
    }



    /**
     * Show the form for creating a new Pipeline.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Pipelines create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $model = $request->model ?? '';

        return view('pipeline::new-pipeline-modal', compact('model'));
    }


    /**
     * Show the form for creating a new Pipeline.
     */
    public function edit_task_field(Request $request, $id)
    {
        $taskService = new TaskService;
        $model = $task = $taskService->find($id);

        $pipelines = $this->pipelineService->query();

        $field = 'pipeline::pipeline-selector';
        
        $modalRoute = route('Tasks.project_task', $id);

        return view('tasks::edit-form-wrapper', compact('field','pipelines', 'model', 'task', 'modalRoute'));
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

        // Create and save the Pipeline
        $source = $this->pipelineService->createPipeline(array_merge($request->only('name', 'model','sort','color'), $info));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        // Display a single Pipeline
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Pipelines edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }   

        $pipeline = $this->pipelineService->find($id);

        return view('pipeline::edit-pipeline-modal', compact('pipeline'));
    }

    /**
     * Update the specified Pipeline in the database.
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
        
        $update = $this->pipelineService->updatePipeline($id, $request->only('name', 'model','sort','color', 'pipeline_id'));

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
        
        $delete = $this->pipelineService->deletePipeline($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Pipelines deleted successfully',
        ], 200) : null;
    }
}
