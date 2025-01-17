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

        return view('customers.client.clients', compact('clients'));

    }

    /**
     * Show the form for creating a new client.
     */
    public function create()
    {
        return view('customers.client.client_create');
    }

    /**
     * Store a newly created client in the database.
     */
    public function store(Request $request)
    {

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'file' => 'image|max:2048',
            // 'email' => 'required|email|unique:clients,email',
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
        $client = Client::firstOrCreate($request->only('first_name', 'last_name', 'email'));

        $handlePicture = $this->handleUploads($request, 'avatar', $client);
        
        return $handlePicture;
        // return redirect()->route('clients.index')->with('success', 'Client created successfully');
    }

    public function handleUploads($request, String $key = 'avatar', Client $client) 
    {
        if (!$request->hasFile($key)) {
            return;
        }
        

        $request->validate([
            $key => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the file
        ]);

        // Define the target folder
        $targetFolder = public_path('images');
        
        // Ensure the folder exists
        if (!is_dir($targetFolder)) {
            mkdir($targetFolder, 0755, true);
        }

        // Get the uploaded file
        $file = $request->file($key);

        // Define the filename as avatar with the original extension
        $fileName = 'avatar-' .rand(9999,99999).'-'.$client->client_id.'.'. $file->getClientOriginalExtension();

        // Move the file to the images folder
        $file->move($targetFolder, $fileName);
        
        $path = 'images/'.$fileName;

        echo $path;
        
        // Save the path to the user's profile
        $update = $client->update(['picture' => $path]);
        
        return $update;
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


    
    
    // Login function
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('client')->attempt($credentials)) {
            return response()->json(['result' => 'Login successful', 'redirect' => '/dashboard' ], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    // Signup function
    
    /**
     * Store a newly created client in the database.
     */
    public function register(Request $request)
    {

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'required|string|max:100|min:5',
            'email' => 'required|email|unique:clients,email',
        ]);

        if ($validator->fails()) {
            return $this->hasError($validator->errors(), 'Validation Error');
        }
        
        // Create and save the client
        $client = $this->clientService->createStaff(  $request->only('first_name', 'last_name', 'email', 'password') );

        $handleOTP = $this->clientService->creteOTP($client);
        
        return response()->json([
            'success' => true,
            'result' => 'Thanks for subscription, Please check your email',
            'redirect' => route('OTP.activate')
        ], 200);
    }


    // Logout function
    public function logout()
    {
        Auth::logout();
        return response()->json(['result' => 'Logged out successfully'], 200);
    }


}
