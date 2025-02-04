<?php

namespace App\Modules\Deals\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;

use App\Modules\Customers\Services\ClientService;
use App\Modules\Customers\Controllers\ClientController;
use App\Modules\Deals\Services\DealService; 
use App\Modules\Tasks\Services\TaskService;
use App\Modules\Leads\Services\LeadService;
use App\Http\Controllers\Controller;
use App\Modules\Deals\Events\DealSaved;
use App\Modules\Deals\Events\DealPage;
use App\Modules\Deals\Events\OverviewWidget; 
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
        

        $context2 = ['components' => []];
        // Fire the event
        $event = event(new OverviewWidget($context2, $deal));
        $overview_components = $event[0]->context['components'] ?? [];
        
        $context = ['components' => []];
        $event = event(new DealPage($request, $deal, $context));
        $top_components = $event[0]->context['components'] ?? [];
        
        return view('deal::overview', compact('deal', 'dealTabs', 'top_components', 'overview_components'));
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

        $taskService = new TaskService;
        $task = $taskService->find($id);
        $model_type = get_class($task);   
        $model_id = $task->task_id;

        $modalRoute = route('Tasks.deal_task', $id);

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
        $tasks = $taskService->query($request, $deal->id, get_class($deal))->get();

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
        $tasks = $taskService->query($request, $deal->id, get_class($deal))->get();
        $statusList = $taskService->loadStatusList();

        $context = ['components' => []];
        $event = event(new DealPage($request, $deal, $context));
        $top_components = $event[0]->context['components'] ?? [];

        return view('deal::tasks', compact('deal', 'top_components', 'statusList','dealTabs','modelType', 'modelId', 'tasks'));
    }


    public function store(Request $request, $output = 'json')
    {
        
        
        $user = Auth::user();

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'expected_due_date' => 'date',
            'amount' => 'min:1',
            'pipeline_id' => 'required|integer|min:1',
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
        $deal = $this->service->createDeal(array_merge($request->only('name', 'expected_due_date','client_id' , 'amount','description'), $info));

        isset($deal->id) ? event(new DealSaved($request, $deal)) : '';

        return ($deal && $output == 'json') ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : $deal;
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
        try{    
            $deal = $this->service->updateDeal($id, $request->only('name', 'status', 'description', 'id','client_id','location_info','staff_id'));

            return $deal ? response()->json([
                'success' => true,
                'no_reset' => true,
                'title' => 'Done',
                'result' =>  'Updated successfully',
            ], 200) : null;

        } catch (\Throwable $th) {
           
            return response()->json([
                'success' => false,
                'title' => 'Done',
                'error' =>  $th->getMessage(),
            ], 400);

        }
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

    /**
     * Load Modal to Convert Lead to Deal
     * 
     */
    public function convertLeadModal(Request $request, $lead_id)
    {
        $lead = $this->service->getLead($lead_id);

        return view('deal::convert-lead-modal', compact('lead'));

    }


    /**
     * Convert Lead to Deal
     * 
     */
    public function convertLead(Request $request, $lead_id)
    {
        
        $leadService = new LeadService;
        $lead = $leadService->find( $lead_id );
        
        // Validate incoming request data
        $deal = $this->store($request, 'object');

        if (method_exists($deal,'getContent')) 
            return $deal->getContent();

            
        $clientController = new ClientController(new ClientService);
        $client = $clientController->store( $request, 'object');
        if (method_exists($client,'getContent')) 
            return $client->getContent();


        $dealClient = $deal->update(['client_id'=> $client->id(), 'lead_id' => $lead->id() ]);

        return $dealClient ? $this->jsonResponse('New deal has been created', 'Deal create', null, route('Deal.show', $deal->id)) : '';
        // return view('deal::convert-lead-modal', compact('lead'));

    }
}
