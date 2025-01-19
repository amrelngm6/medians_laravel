<?php

namespace App\Modules\Proposals\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;
use App\Http\Controllers\Controller;
use App\Modules\Projects\Services\ProjectService;
use App\Modules\Items\Services\ItemService;
use App\Modules\Proposals\Services\ProposalService;
use App\Modules\Customers\Services\ClientService;


class ProposalController extends Controller
{
    
    protected $service;

    public function __construct(ProposalService $service)
    {
        $this->service = $service;
    }


    public function index( Request $request)
    {
        // List all Proposals
        
        $user = Auth::user();

        if ($user->cannot('Proposal create') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        // Display a single Proposal
        $proposals = $this->service->get();
        $statusList = $this->service->loadStatusList();
        $clientService = new ClientService;
        $clients = $clientService->query();
        
        $ItemService = new ItemService;
        $items = $ItemService->query();

        return view('proposals::list', compact('items', 'proposals', 'user', 'statusList', 'clients'));
   
    }

    public function store(Request $request)
    {
        // Store a new Proposal
        
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

        $create = $this->service->createProposal(array_merge($userInfo, $request->only('items', 'title', 'content', 'model_type', 'model_id', 'user_id', 'user_type', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount', 'tax_amount', 'total', 'status_id')));

        return response()->json([
            'success' => !empty($create),
            'reload' => !empty($create),
            'title' => $create ? 'Done' : 'Error',
            'result' => $create ? 'Proposal created successfully' : 'Failed to store' ], 
            $create ? 201 : 422);

    }

    public function show(Request $request, $id)
    {
        // Display a single Proposal
    }

    public function edit( Request $request, $id)
    {
        // Display a single Proposal
        
        $user = Auth::user();

        if ($user->cannot('Proposal edit') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $statusList = $this->service->loadStatusList();
        $clientService = new ClientService;
        $clients = $clientService->query();
        
        $ItemService = new ItemService;
        $items = $ItemService->query();

        // Display a single Proposal
        $proposal = $this->service->find($id);

        return view('proposals::edit-modal', compact('proposal', 'items', 'clients','statusList'));
    
    }

    public function update(Request $request, $id)
    {
        // Update the specified Proposal
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'date' => 'required|string',
            'expiry_date' => 'required|string',
            'status_id' => 'required|integer|exists:status_list,status_id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $this->service->updateProposal($id, $request->all());

        return response()->json(['message' => 'Proposal updated successfully'], 200);
    }

    public function destroy(Request $request, $id)
    {
        // Delete the specified Proposal
        $this->service->deleteProposal($id);

        return response()->json(['message' => 'Proposal deleted successfully'], 200);
    }

    
    /**
     * Load Proposal Item Row
     */
    public function itemRow(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Proposal create')) {
            abort(403, 'Unauthorized');
        }

        $ItemService = new ItemService;
        $item = $ItemService->find($request->item_id);
        $key = rand(9,99);
        $tax_amount       = ((int) $item->price) *  ((int) $item->tax ?? 0) / 100;
        $total = (int) $item->price + $tax_amount;
        $key = rand(9,99);

        return view('proposals::item-row', compact('item', 'key','total'));
    }


    /**
     * Show the proposals at Project page.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $proposals = $this->service->query($project->project_id, get_class($project));
        $statusList = $this->service->loadStatusList();

        $ItemService = new ItemService;
        $items = $ItemService->query();

        return view('proposals::project', compact('items', 'project', 'proposals', 'projectTabs', 'statusList'));
    }
}
