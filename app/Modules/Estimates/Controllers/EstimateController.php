<?php

namespace App\Modules\Estimates\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;
use App\Http\Controllers\Controller;
use App\Modules\Projects\Services\ProjectService;
use App\Modules\Items\Services\ItemService;
use App\Modules\Estimates\Services\EstimateService;
use App\Modules\Customers\Services\ClientService;

class EstimateController extends Controller
{
    protected $service;

    public function __construct(EstimateService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Estimate view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        // Display a single Estimate
        $statusList = $this->service->loadStatusList();
        $clientService = new ClientService;
        $clients = $clientService->query();
        
        $ItemService = new ItemService;
        $items = $ItemService->query();

        return view('estimate::list', compact('items', 'user', 'statusList', 'clients'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Estimate view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        // Display a single Estimate
        $estimates = $this->service->query($request);

        return view('estimate::rows', compact('estimates'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'date' => 'required|string',
            'expiry_date' => 'required|string',
            'status_id' => 'required|integer|exists:status_list,status_id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = Auth::user();

        $userInfo = [
            'business_id' => $user->business_id ?? 0, 
            'created_by' => $user->id() ?? 0
        ];

        $create = $this->service->createEstimate(array_merge($userInfo, $request->only('items', 'title', 'content', 'model_type', 'model_id', 'client_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount', 'tax_amount', 'total', 'status_id')));

        return $create ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' =>  'Estimate created successfully'], 201) : null;
    }

    public function edit(Request $request,$id)
    {
        
        $user = Auth::user();

        if ($user->cannot('Estimate edit') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $statusList = $this->service->loadStatusList();
        $clientService = new ClientService;
        $clients = $clientService->query();
        
        $ItemService = new ItemService;
        $items = $ItemService->query();

        // Display a single Estimate
        $estimate = $this->service->find($id);

        return view('estimate::edit-modal', compact('estimate', 'items', 'clients','statusList'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'date' => 'required|string',
            'expiry_date' => 'required|string',
            'status_id' => 'required|integer|exists:status_list,status_id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $this->service->updateEstimate($id, $request->all());

        return response()->json(['result' => 'Estimate updated successfully'], 200);
    }

    public function destroy($id)
    {
        $this->service->deleteEstimate($id);

        return response()->json(['result' => 'Estimate deleted successfully'], 200);
    }


    /**
     * Load Estimate Item Row
     */
    public function itemRow(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Estimate create')) {
            abort(403, 'Unauthorized');
        }

        $ItemService = new ItemService;
        $item = $ItemService->find($request->item_id);
        $key = rand(9,99);
        $tax_amount       = ((int) $item->price) *  ((int) $item->tax ?? 0) / 100;
        $total = (int) $item->price + $tax_amount;
        $key = rand(9,99);

        return view('estimate::item-row', compact('item', 'key','total'));
    }


    /**
     * Show the estimates at Project page.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $estimates = $this->service->query($request, $project->project_id, get_class($project));
        $statusList = $this->service->loadStatusList();

        $ItemService = new ItemService;
        $items = $ItemService->query();

        return view('estimate::project', compact('items', 'project', 'estimates', 'projectTabs', 'statusList'));
    }

}
