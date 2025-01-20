<?php

namespace App\Modules\CreditNotes\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\CreditNotes\Services\CreditNoteService;
use App\Modules\Invoices\Services\InvoiceService;
use App\Modules\Projects\Services\ProjectService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class CreditNoteController extends Controller
{
    protected $credit_noteService;

    public function __construct(CreditNoteService $credit_noteService)
    {
        $this->credit_noteService = $credit_noteService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('CreditNotes view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $credit_notes = $this->credit_noteService->query($request);

        $statusList = $this->credit_noteService->loadStatusList();

        $model = $this->credit_noteService->model;

        return view('credit_notes::list', compact('credit_notes', 'model', 'statusList'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $credit_notes = $this->credit_noteService->query($request);

        $model = $this->credit_noteService->model;

        return view('credit_notes::rows', compact('credit_notes', 'model'));
    }

    public function create(Request $request, $invoiceId)
    {
        $user = Auth::user();

        if ($user->cannot('CreditNotes create')) {
            abort(403, 'Unauthorized');
        }

        $invoiceService = new InvoiceService;
        $invoice = $invoiceService->find($invoiceId);

        $modules = $this->credit_noteService->modules();
        $statusList = $this->credit_noteService->loadStatusList();
        $categories = $this->credit_noteService->loadCats();
        $staff = $this->credit_noteService->staff();

        return view('credit_notes::add-creditnote-modal', compact('invoice', 'modules', 'user', 'statusList', 'staff', 'categories'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('CreditNotes edit')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->credit_noteService->modules();

        $credit_note = $this->credit_noteService->find($id);

        return view('credit_notes::edit', compact('modules', 'user', 'credit_note'));
    }

    /**
     * Load Estimate Item Row
     */
    public function itemRow(Request $request)
    {
        $user = Auth::user();

        $InvoiceService = new InvoiceService;
        $item = $InvoiceService->findItem($request->item_id);
        $key = rand(9,99);

        return view('credit_notes::item-row', compact('item', 'key'));
    }



    public function store(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'status_id' => 'required|integer',
            'date' => 'required|date',
            'items' => 'required|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $info = [
            'business_id'=> $user->business_id ?? 0,
            'created_by'=> $user->staff_id ?? 0,
            'model_id'=> $request->model_id ?? $user->staff_id,
            'model_type'=> $request->model_type ?? get_class($user),
        ];

        $source = $this->credit_noteService->createCreditNote(array_merge($request->only('items', 'date', 'terms', 'admin_note', 'client_note', 'subtotal', 'tax_amount', 'total', 'code', 'currency_id',  'status_id'), $info));  

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

        // if ($user->cannot('CreditNotes view')) {
        //     abort(403, 'Unauthorized');
        // }

        $modules = $this->credit_noteService->modules();

        $statusList = $this->credit_noteService->loadStatusList();

        $credit_note = $this->credit_noteService->find($id);

        return view('credit_notes::credit_note', compact('modules', 'user', 'statusList', 'credit_note'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status_id' => 'integer',
            'date' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402);
        }

        $update = $this->credit_noteService->updateCreditNote($id, $request->only('status_id', 'date'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updated',
        ], 200) : null;
    }

    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->cannot('CreditNotes delete')) {
            return response()->json([
                'success' => false,
                'title' => 'Unauthorized',
                'error' => 'No permission to delete credit_notes',
            ], 200);
        }

        $delete = $this->credit_noteService->deleteCreditNote($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'CreditNote deleted successfully',
        ], 200) : null;
    }

    
    /**
     * Show Estimates of project.
     * at Project page.
     */
    public function project(Request $request, $id)
    {
        $user = Auth::user();

        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $request->model_type = get_class($project);
        $credit_notes = $this->credit_noteService->query($request);
        $statusList = $this->credit_noteService->loadStatusList();
        $categories = $this->credit_noteService->loadCats();

        return view('credit_notes::project', compact('categories', 'project', 'credit_notes', 'projectTabs', 'statusList', 'user'));
    }
}
