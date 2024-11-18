<?php

namespace App\Modules\Customers\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Modules\Customers\Models\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    /**
     * Display a listing of clients.
     */
    public function index(Request $request)
    {

        // Optionally apply filters and pagination
        $clients = Client::query();

        // If search query is provided, filter by name or email
        if ($request->has('search')) {
            $search = $request->input('search');
            $clients->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
        }

        $clients = $clients->paginate(10); // Paginate results

        return view('customers.clients', compact('clients'));

    }

    /**
     * Show the form for creating a new client.
     */
    public function create()
    {
        return view('customers.client_create');
    }

    /**
     * Store a newly created client in the database.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
            // return redirect()->back()->withErrors($validator)->withInput();
        }
        
        // Create and save the client
        Client::create($request->only('name', 'email', 'phone', 'address'));

        return redirect()->route('clients.index')->with('success', 'Client created successfully');
    }

    /**
     * Display the specified client.
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing a specific client.
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified client in the database.
     */
    public function update(Request $request, $id)
    {
        // Find the client
        $client = Client::findOrFail($id);

        // Validate updated data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:clients,email,{$id}",
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update client details
        $client->update($request->only('name', 'email', 'phone', 'address'));

        return redirect()->route('clients.index')->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified client from the database.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
    }

    /**
     * Search clients based on a query.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $clients = Client::where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->paginate(10);

        return view('clients.index', compact('clients'));
    }
}
