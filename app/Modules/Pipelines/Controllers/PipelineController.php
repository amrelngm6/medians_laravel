<?php

namespace App\Modules\Pipelines\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;
use App\Modules\Pipelines\Services\PipelineService;
use App\Modules\Deals\Services\DealService;
use App\Modules\Deals\Models\Deal;
use App\Http\Controllers\Controller;

class PipelineController extends Controller
{

    protected $service;

    public function __construct(PipelineService $service)
    {
        $this->service = $service;
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

        $Pipelines = $this->service->query($request);
        
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
    public function create_stage(Request $request, $id)
    {
        $pipeline = $this->service->find($id);

        return view('pipeline::add-stage', compact('pipeline'));
    }

    /**
     * Show the form for creating a new Pipeline.
     */
    public function edit_stage(Request $request, $id)
    {
        $stage = $this->service->findStage($id);

        return view('pipeline::edit-stage', compact('stage'));
    }

    /**
     * Display a listing of Pipelines as JSON.
     */
    public function searchJson(Request $request)
    {
        // Optionally apply filters and pagination
        $list = $this->service->query($request);

        return response()->json($list->select('id', 'name', 'stages_count'));
    }


    /**
     * Display a listing of Pipeline Stages as Form Field.
     */
    public function changePipelineModal(Request $request, $id)
    {
        
        $pipelines = $this->service->query();

        $DealService = new DealService(new Deal);
        $model = $DealService->find($id);

        $selectedStage = $this->service->findByModel($model);

        return view('pipeline::pipeline-change-modal', compact('pipelines', 'model', 'selectedStage'));
    }


    /**
     * Display a listing of Pipeline Stages as Form Field.
     */
    public function stageSearchInput(Request $request, $id)
    {
        $stages = $this->service->find($id)->stages ?? [];

        return view('pipeline::pipeline-stage-input', compact('stages'));
    }



    /**
     * Display a listing of Pipeline stage as JSON.
     */
    public function stageSearchJson(Request $request)
    {
        // Optionally apply filters and pagination
        $list = $this->service->query($request);

        return response()->json($list->select('id', 'name'));
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
        $source = $this->service->createPipeline(array_merge($request->only('name', 'model','description'), $info));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'redirect' => route('Pipeline.edit', $source->id),
            'result' => 'Created',
        ], 200) : null;
    }


    public function storeStage(Request $request)
    {
        try {
            
            $user = Auth::user();

            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'sort' => "required|unique:clients,email,{$client_id},client_id",
                'color' => 'required',
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
            $source = $this->service->createStage(array_merge($request->only('pipeline_id', 'name', 'model_id', 'model_type', 'color', 'sort','description'), $info));

            return $source ? response()->json([
                'success' => true,
                'title' => 'Done',
                'reload' => true,
                'result' => 'Created',
            ], 200) : null;
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage());
        }
    }

    /**
     * Update selected pipeline for Deal
     */
    public function updateSelectedPipeline(Request $request)
    {
        try {

            $user = Auth::user();

            $info = ['created_by' => $user->id(), 'business_id'=> $user->business_id ?? 0];

            $update = $this->service->updateSelectedPipeline(array_merge($info,$request->only('pipeline_id', 'model_type', 'model_id'))) ;

            return $update ? $this->jsonResponse('Updated successfully', 'Updated', true) : null;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage());
        }
    }

    /**
     * Update selected Stage for Deal
     */
    public function updateSelectedStage(Request $request)
    {
        try {

            $user = Auth::user();

            $DealService = new DealService(new Deal);
            $deal = $DealService->find($request->model_id);

            $update = $this->service->updateSelectedPipeline(array_merge($request->only('pipeline_id', 'pipeline_stage_id', 'model_type', 'model_id'))) ;

            return $update ? $this->jsonResponse('Updated successfully', 'Updated', false) : null;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage());
        }
    }


    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Pipelines edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }   

        $pipeline = $this->service->find($id);

        return view('pipeline::edit', compact('pipeline'));
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
        
        $update = $this->service->updatePipeline($id, $request->only('name', 'model','sort','color', 'description', 'id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    /**
     * Update the specified Pipeline in the database.
     */
    public function updateStage(Request $request, $id)
    {
        try {
             
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
            
            $update = $this->service->updateStage($id, $request->only('name', 'description','sort','color', 'id'));

            return $update ? response()->json([
                'success' => true,
                'reload' => true,
                'title' => 'Done',
                'result' => 'Updaetd',
            ], 200) : null;

        } catch (Exception $e) {
            return  $this->hasError($e->getMessage());
        }

    }

    
    /**
     * Remove the specified Proprities from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->service->deletePipeline($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Pipelines deleted successfully',
        ], 200) : null;
    }
    
    /**
     * Remove the specified Proprities from the database.
     */
    public function destroyStage(Request $request, $id)
    {
        
        $delete = $this->service->deleteStage($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Pipeline Stage deleted successfully',
        ], 200) : null;
    }
}
