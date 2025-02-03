<?php

namespace App\Modules\Customers\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Modules\Customers\Models\Client;
use App\Modules\Customers\Services\ClientService;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class ClientController extends Controller
{

    /** Page Tabs route prefix */
    public $tabsPrefix = 'Client.tabs';

    protected $service;

    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }


    /**
     * Display a listing of clients::
     */
    public function index(Request $request)
    {
        $statusList = $this->service->loadStatusList();

        return view('clients::index', compact('statusList'));
    }

    /**
     * Display a listing of staff.
     */
    public function filter(Request $request)
    {

        // Optionally apply filters and pagination
        $ClientList = $this->service->query($request);

        return view('clients::rows', compact('ClientList'));
    }


    /**
     * Show the form for creating a new client.
     */
    public function create()
    {
        return view('clients::client_create');
    }


    /**
     * Display the specified client.
     */
    public function show(Request $request, $id)
    {
        $user = Auth::user();

        $client = Client::findOrFail($id);
        
        $clientTabs = $this->loadModuleTabs($this->tabsPrefix);

        return view('clients::overview', compact('client','clientTabs'));
    }

    /**
     * Show the form for editing a specific client.
     */
    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        $client = Client::findOrFail($id);
        
        $statusList = $this->service->loadStatusList(); 
        
        $clientTabs = $this->loadModuleTabs($this->tabsPrefix);

        return view('clients::settings', compact('client','clientTabs', 'statusList'));

    }

    /**
     * Show the form for editing a specific client.
     */
    public function editModal(Request $request, $id)
    {
        $user = Auth::user();

        $client = Client::findOrFail($id);
        
        $statusList = $this->service->loadStatusList(); 
        
        $clientTabs = $this->loadModuleTabs($this->tabsPrefix);

        return view('clients::edit-client-modal', compact('client','clientTabs', 'statusList'));

    }

    
    /**
     * Store a newly created client in the database.
     */
    public function store(Request $request, $output = 'json')
    {

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'file' => 'image|max:2048',
            'email' => 'required|email|unique:clients,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $data = [];
        $data['business_id'] = Auth::user()->business_id ?? 0;
        $data['created_by'] = Auth::user()->id() ?? 0;
        
        // Create and save the client
        $client = Client::firstOrCreate(array_merge( $data, $request->only('first_name', 'last_name', 'about', 'phone', 'email')));

        $handlePicture = $this->handleUploads($request, 'avatar', $client);
        
        return $output == 'json' ? $handlePicture : $client;
    }

    public function handleUploads(Request $request, String $key = 'avatar', Client $client) 
    {
        try {
            
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

            // Save the path to the user's profile
            $update = $client->update(['picture' => $path]);
            
            return $update;
            
        } catch (\Throwable $th) {
            throw new \Throwable($th->getMessage(), 1);
        }
    }
    
    /**
     * Update the specified client in the database.
     */
    public function update(Request $request, $client_id)
    {
        // Find the client
        $client = Client::findOrFail($client_id);

        // Validate updated data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'file' => 'image|max:2048',
            'email' => "required|email|unique:clients,email,{$client_id},client_id",
        ]);

        if ($validator->fails()) {
            
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 200);
            
        }

        // Update client details
        $client = $this->service->updateCustomer($client_id, $request->only('first_name','last_name', 'email', 'phone', 'about', 'status', 'location_info'));

        $handlePicture = $this->handleUploads($request, 'avatar', $client);

        return $client ? response()->json([
            'success' => true,
            'result' => 'Client updated successfully',
            'redirect' => $request->redirect ? route('Client.overview', $client_id) : null
        ], 200) : '';
    }

    /**
     * Remove the specified client from the database.
     */
    public function destroy(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients::index')->with('success', 'Client deleted successfully');
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

        return view('clients::index', compact('clients'));
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
        $client = $this->service->createClient(  $request->only('first_name', 'last_name', 'email', 'password') );

        $handleOTP = $this->service->creteOTP($client);
        
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
