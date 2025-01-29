<?php

namespace App\Modules\Tickets\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Tickets\Services\TicketService;
use App\Modules\Tickets\Events\TicketFormRendering;
use App\Modules\Tickets\Events\TicketModalRendering;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;    

class TicketController extends Controller
{
    
    protected $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Tickets view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $tickets = [];

        $statusList = $this->ticketService->loadStatusList();

        $model = $this->ticketService->model;

        $staff = $this->ticketService->staff();

        $categories = $this->ticketService->loadCats();

        return view('tickets::list', compact('categories', 'tickets', 'model', 'statusList', 'staff'));
    }


    public function filter(Request $request)
    {
        $user = Auth::user();

        $tickets = $this->ticketService->query($request);

        $model = $this->ticketService->model;

        return view('tickets::rows', compact('tickets', 'model'));
    }



    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Tickets create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $context = ['components' => []];
        // Fire the event
        $event = event(new TicketFormRendering($context, new $this->ticketService->model));
        $components = $event[0]->context['components'] ?? [];

        $statusList = $this->ticketService->loadStatusList();
        $categories = $this->ticketService->loadCats();
        $staff = $this->ticketService->staff();
        $clients = $this->ticketService->clients();

        return view('tickets::add-ticket-modal', compact( 'components', 'user', 'statusList', 'staff', 'clients', 'categories'));
    }


    public function show($id)
    {
        $user = Auth::user();

        if ($user->cannot('Tickets view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $statusList = $this->ticketService->loadStatusList();

        $ticket = $this->ticketService->find($id);

        $context = ['components' => []];
        // Fire the event
        $event = event(new TicketModalRendering($context, $ticket));
        $components = $event[0]->context['components'];

        return view('tickets::ticket', compact('components', 'user', 'statusList', 'ticket'));
    }



    /**
     * Store a newly created ticket in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'custom_field' => 'array',
            // 'model_id' => 'required|integer',
            'assigned_to' => 'required|integer',
            'client_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $info = [
            'date' => date('Y-m-d'), 
            'business_id'=> $user->business_id ?? 0,
            'model_id'=> $request->model_id ?? $request->client_id,
        ];

        $source = $this->ticketService->createTicket(array_merge($request->only('subject', 'message', 'model_id', 'model_type', 'client_id', 'client_type', 'assigned_to', 'status_id', 'category_id', 'priority_id', 'custom_field'), $info));  

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    
    /**
     * Update a ticket in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $source = $this->ticketService->updateTicket($id, $request->only('assigned_to', 'status_id', 'category_id', 'priority_id', 'custom_field'));  

        return $source ?  $this->jsonResponse('Updated successfully', 'Done', true) : null;
    }

    

    /**
     * Show the form for updating the Status.
     */
    public function edit_status_field(Request $request, $id)
    {

        $statusList = $this->ticketService->loadStatusList();

        $model = $ticket = $this->ticketService->find($id);

        $field = 'status.status-selector';
        
        return view('tickets::edit-form', compact('field','statusList', 'model', 'ticket'));
    }

    
    /**
     * Show the form for updating the Priority.
     */
    public function edit_priority_field(Request $request, $id)
    {

        $model = $ticket = $this->ticketService->find($id);

        $priorities = $this->ticketService->loadPriorities();

        $field = 'priority::priority-selector';
        
        return view('tickets::edit-form', compact('field','priorities', 'model', 'ticket'));
    }

    
    /**
     * Show the form for creating a new Priority.
     */
    public function edit_assignee_field(Request $request, $id)
    {

        $model = $ticket = $this->ticketService->find($id);

        $staff = $this->ticketService->staff();

        $field = 'tickets::components.staff';
        
        return view('tickets::edit-form', compact('field','staff', 'model', 'ticket'));
    }


}
