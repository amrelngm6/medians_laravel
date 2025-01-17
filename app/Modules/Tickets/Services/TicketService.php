<?php

namespace App\Modules\Tickets\Services;

use App\Modules\Tickets\Models\Ticket;
use App\Modules\Priorities\Models\Priority;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\Category;
use App\Modules\Customers\Services\StaffService;
use App\Modules\Customers\Services\ClientService;
use App\Models\Auth;

class TicketService
{
    public $model;

    public function __construct(Ticket $model)
    {
        $this->model = $model;
    }
    
    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $ticket = $this->model->forBusiness($business_id);

        if ($request->has('status_id') && $request->status_id > 0) {
            $ticket->where('status_id', $request->status_id);
        }

        if ($request->has('client_id') && $request->client_id > 0) {
            $ticket->where('client_id', $request->client_id);
        }

        if ($request->has('assigned_to') && $request->assigned_to > 0) {
            $ticket->where('assigned_to', $request->assigned_to);
        }

        if ($request->has('category_id') && $request->category_id > 0) {
            $ticket->where('category_id', $request->category_id);
        }

        if ($request->has('date') ) {
            $date = explode(' - ', $request->date);
            $ticket->whereDate('created_at', '>=', date('Y-m-d 00:00:00', strtotime($date[0])));
            $ticket->whereDate('created_at', '<', date('Y-m-d 00:00:00', strtotime($date[1] . ' +1 day')));
        }

        return $ticket->with('status')->get();
    }

    public function find($id)
    {
        // Business logic for finding a Ticket
        return $this->model->find($id);
    }

    public function createTicket(array $data)
    {
        // Business logic for creating a Ticket
        return $this->model->create($data);
    }

    public function updateTicket($id, array $data)
    {
        // Business logic for updating a Ticket
        $ticket = $this->model->find($id);
        if ($ticket) {
            $ticket->update($data);
            return $ticket;
        }
        return null;
    }

    public function deleteTicket($id)
    {
        // Business logic for deleting a Ticket
        $ticket = $this->model->find($id);
        if ($ticket) {
            $ticket->delete();
            return true;
        }
        return false;
    }

    public function loadStatusList()
    {
        // Business logic for loading status list
        return Status::default([Auth::user()->business_id ?? 0, 0])->where('model', Ticket::class)->get();
    }


    public function loadPriorities()
    {
        // Business logic for loading status list
        return Priority::default([Auth::user()->business_id ?? 0, 0])->where('model', Ticket::class)->get();
    }


    /**
     * Get allowed Categories
     */
    public function loadCats()
    {
        return Category::default([Auth::user()->business_id, '0'])->where('model', Ticket::class)->get();
    }

    /**
     * Get Staff list
     */
    public function staff()
    {
        $StaffService = new StaffService;
        return $StaffService->query();
    }

    /**
     * Get Clients list
     */
    public function clients()
    {
        $clientsService = new ClientService;
        return $clientsService->query();
    }

    
}
