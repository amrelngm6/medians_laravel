<?php

namespace App\Modules\Deals\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;
use App\Modules\Deals\Services\DealService;
use App\Modules\Tasks\Services\TaskService;
use App\Http\Controllers\Controller;
use App\Modules\Deals\Events\DealSaved;
use App\Modules\Deals\Events\DealPage;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;

class DealController extends Controller
{

    public $tabsPrefix = 'Deal.tabs';

    protected $service;

    public function __construct(DealService $service)
    {
        $this->service = $service;
    }

    
    /**
     * Display a listing of Proprities.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        // if (!$user || $user->cannot('Deals view') && Auth::guardName() != 'superadmin') {
        //     abort(401, 'Unauthorized');
        // }

        $Deals = $this->service->query($request);
        
        return view('deal::list', compact('Deals'));
    }



    /**
     * Show the form for creating a new Deal.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Deals create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $model = $request->model ?? '';

        return view('deal::new-deal-modal', compact('model'));
    }

    

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Deals edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }   

        $deal = $this->service->find($id);
        $dealTabs = $this->loadModuleTabs($this->tabsPrefix);
        
        $context = ['components' => []];
        $event = event(new DealPage($request, $deal, $context));
        $top_components  = $event[0]->context['components'] ?? [];
        
        return view('deal::edit', compact('deal', 'dealTabs', 'top_components'));
    }


    

    public function overview(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Deals view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }   

        $deal = $this->service->find($id);
        $dealTabs = $this->loadModuleTabs($this->tabsPrefix);
        
        $context = ['components' => []];
        $event = event(new DealPage($request, $deal, $context));
        $top_components = $event[0]->context['components'] ?? [];
        
        return view('deal::overview', compact('deal', 'dealTabs', 'top_components'));
    }



    /**
     * Show the form for creating a new Deal.
     */
    public function create_stage(Request $request, $id)
    {
        $deal = $this->service->find($id);

        return view('deal::add-stage', compact('deal'));
    }

    /**
     * Show the form for creating a new Deal.
     */
    public function edit_stage(Request $request, $id)
    {
        $stage = $this->service->findStage($id);

        return view('deal::edit-stage', compact('stage'));
    }


    public function create_deal_task(Request $request, $id)
    {
        $deal = $this->service->find($id);

        $model_type = get_class($this->service->model);       
        $model_id = $id;       
        
        $taskService = new TaskService;
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskFormRendering($context, new $taskService->model));
        $components = $event[0]->context['components'];
        $custom_fields = $taskService->loadModelFields(); 

        // List tasks
        return view('tasks::add-task-modal', compact('model_id', 'model_type', 'deal','components','custom_fields'));
    }

    
    public function deal_task(Request $request, $id)
    {

        $model_type = Deal::class;   
        $model_id = $id;

        $modalRoute = route('Deal.deal_task', $id);
        
        $taskService = new TaskService;
        $task = $taskService->find($id);

        $context = ['components' => []];
        // Fire the event
        $event = event(new TaskModalRendering($context, $task));
        $components = $event[0]->context['components'];

        // List tasks
        return view('tasks::task-modal', compact('model_id', 'model_type', 'task','modalRoute', 'components'));
    }

    

    /**
     * Show the form for updating a Note.
     */
    public function filter_tasks(Request $request, $id)
    {
        $deal = $this->service->find($id);

        $taskService = new TaskService;
        $tasks = $taskService->query($request, $deal->id, get_class($deal));

        $statusList = $taskService->loadStatusList();

        return view('deal::tasks-list', ['deal'=> $deal, 'modelId'=> $deal->id, 'modelType'=> get_class($deal), 'tasks'=>$tasks, 'statusList'=>$statusList ]);
    }
    
    /**
     * Show the form for updating a Note.
     */
    public function tasks(Request $request, $id)
    {
        $deal = $this->service->find($id);
        
        $dealTabs = $this->loadModuleTabs('Deal.tabs');
        
        $modelType = get_class($deal);
        $modelId = $deal->id;

        $taskService = new TaskService;
        $tasks = $taskService->query($request, $deal->id, get_class($deal));
        $statusList = $taskService->loadStatusList();

        $context = ['components' => []];
        $event = event(new DealPage($request, $deal, $context));
        $top_components = $event[0]->context['components'] ?? [];

        return view('deal::tasks', compact('deal', 'top_components', 'statusList','dealTabs','modelType', 'modelId', 'tasks'));
    }


    public function store(Request $request)
    {
        
        
        $user = Auth::user();

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'expected_due_date' => 'date',
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

        // Create and save the Deal
        $deal = $this->service->createDeal(array_merge($request->only('name', 'expected_due_date', 'amount','description'), $info));

        isset($deal->id) ? event(new DealSaved($request, $deal)) : '';

        return $deal ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
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

            // Create and save the Deal
            $source = $this->service->createStage(array_merge($request->only('deal_id', 'name', 'model_id', 'model_type', 'color', 'sort','description'), $info));

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
     * Update the specified Deal in the database.
     */
    public function update(Request $request, $id)
    {
        
        $deal = $this->service->updateDeal($id, $request->only('name', 'status', 'description', 'id','location_info','staff_id'));

        return $deal ? response()->json([
            'success' => true,
            'no_reset' => true,
            'title' => 'Done',
            'result' =>  'Updated successfully',
        ], 200) : null;

    }

    /**
     * Update the specified Deal in the database.
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
        
        $delete = $this->service->deleteDeal($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Deals deleted successfully',
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
            'result' => 'Deal Stage deleted successfully',
        ], 200) : null;
    }
}
