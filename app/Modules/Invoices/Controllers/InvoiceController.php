<?php

namespace App\Modules\Invoices\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Invoices\Services\InvoiceService;
use App\Modules\Items\Services\ItemService;
use App\Modules\Projects\Services\ProjectService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class InvoiceController extends Controller
{
    protected $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Invoices view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $invoices = $this->invoiceService->query($request);

        $statusList = $this->invoiceService->loadStatusList();

        $model = $this->invoiceService->model;

        return view('invoices::list', compact('invoices', 'model', 'statusList'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $invoices = $this->invoiceService->query($request);

        $model = $this->invoiceService->model;

        return view('invoices::rows', compact('invoices', 'model'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Invoices create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $modules = $this->invoiceService->modules();

        return view('invoices::create', compact('modules', 'user'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Invoices edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $modules = $this->invoiceService->modules();

        $invoice = $this->invoiceService->find($id);

        return view('invoices::edit', compact('modules', 'user', 'invoice'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'items' => 'required|array',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $dates = explode(' - ', $request->date);

        $creator = [
            'created_by' => $user->id(), 
            'business_id'=> $user->business_id ?? 0
        ];

        $source = $this->invoiceService->createInvoice(array_merge($request->only('date', 'due_date', 'description', 'model_id', 'model_type', 'client_id','total', 'subtotal', 'tax_amount', 'discount_amount', 'status_id'), $creator), $request->items);  

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        $user = Auth::user();

        if ($user->cannot('Invoices view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $modules = $this->invoiceService->modules();

        $statusList = $this->invoiceService->loadStatusList();

        $invoice = $this->invoiceService->find($id);

        return view('invoices::invoice', compact('modules', 'user', 'statusList', 'invoice'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status_id' => 'integer',
            'due_date' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402);
        }

        $update = $this->invoiceService->updateInvoice($id, $request->only('status_id','due_date'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updated',
        ], 200) : null;
    }

    public function destroy($id)
    {
        $delete = $this->invoiceService->deleteInvoice($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Invoice deleted successfully',
        ], 200) : null;
    }
    
    /**
     * Show the form for managing a Invoices at Project page.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $invoices = $this->invoiceService->getByModel($project->project_id, get_class($project)) ?? [];
        $statusList = $this->invoiceService->loadStatusList();

        $ItemService = new ItemService;
        $items = $ItemService->query();

        return view('invoices::project', compact('items', 'project', 'invoices', 'projectTabs', 'statusList'));
    }
}
