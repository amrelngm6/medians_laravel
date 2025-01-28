<?php

namespace App\Modules\Customers\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Modules\Customers\Models\Staff;
use Illuminate\Support\Facades\Validator;

use App\Modules\Customers\Services\StaffService;
use App\Modules\Core\Models\Role;
use App\Models\Auth;

class StaffController extends Controller
{

    /** Page Tabs route prefix */
    public $tabsPrefix = 'Staff.tabs';

    protected $staffService;

    public function __construct(StaffService $staffService)
    {
        $this->staffService = $staffService;
    }


    /**
     * Display a listing of staff.
     */
    public function index(Request $request)
    {

        $statusList = $this->staffService->loadStatusList(); 

        $rolesList = $this->staffService->loadRoles(); 

        // Optionally apply filters and pagination
        return view('staff::staff.index', compact('statusList', 'rolesList'));  
    }

    /**
     * Display a listing of staff.
     */
    public function filter(Request $request)
    {

        // Optionally apply filters and pagination
        $StaffList = $this->staffService->query($request);

        return view('staff::staff.rows', compact('StaffList'));
    }

    /**
     * Show the form for creating a new staff.
     */
    public function create()
    {
        $statusList = $this->staffService->loadStatusList(); 

        $rolesList = $this->staffService->loadRoles(); 

        return view('customers.staff.create', compact('statusList', 'rolesList'));
    }

    /**
     * Store a newly created staff in the database.
     */
    public function store(Request $request)
    {
        try {
                
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'file' => 'image|max:2048',
                'email' => 'required|email|unique:staff,email',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Create and save the staff
            // $staff = Staff::firstOrCreate($request->only('first_name', 'last_name', 'email', 'position', 'role_id'));
            $staff = $this->staffService->createStaff($request->only('first_name', 'last_name', 'email', 'phone', 'position', 'about', 'role_id', 'status'), $request->only( 'location_info'));

            $handlePicture = $this->staffService->handleUploads($request, 'avatar', $staff);

            $handleRole = $this->staffService->handleRole($request, $staff);
            
            return response()->json([
                'success' => true,
                'result' => 'Staff created successfully',
            ], 200);
            
        } catch(Exception $e) {
            $this->addTaskError('Staff store has issue', $th->getMessage());
        }

    }


    /**
     * Display the specified staff.
     */
    public function overview(Request $request, $id)
    {
        $staffTabs = $this->loadModuleTabs($this->tabsPrefix);

        $staff = $this->staffService->find($id);

        return view('customers.staff.overview', compact('staff','staffTabs'));
    }

    
    /**
     * Display the Settings for Staff.
     * Load settings for staff
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function settings(Request $request, $id = 0)
    {
        $staffTabs = $this->loadModuleTabs($this->tabsPrefix);
    
        $statusList = $this->staffService->loadStatusList(); 

        $rolesList = $this->staffService->loadRoles(); 

        return view('customers.staff.settings', compact( 'statusList','staffTabs','rolesList'));
    }

    
    /**
     * Show the form for editing a specific staff.
     */
    public function edit(Request $request, $id)
    {

        $staff = Staff::findOrFail($id);
        return view('customers.staff.edit', compact('staff'));
    }

    /**
     * Update the specified staff in the database.
     */
    public function update(Request $request, $staff_id)
    {
        // Find the staff
        $staff = Staff::findOrFail($staff_id);

        // Validate updated data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'role_id' => 'required|integer|max:255',
            'email' => "required|email|unique:staff,email,{$staff_id},staff_id",
        ]);

        if ($validator->fails()) {
            return $this->hasError($validator->errors(), 'Validation Error');
        }
        
        // Update staff details
        $update = $this->staffService->updateStaff($staff_id, $request->only( 'staff_id', 'location_info','first_name', 'last_name', 'email', 'phone', 'position', 'about', 'role_id', 'status'));

        $handlePicture = $this->staffService->handleUploads($request, 'avatar', $staff);

        $handleRole = $this->staffService->handleRole($request, $staff);
        
        return response()->json([
            'success' => true,
            'result' => 'Staff updated successfully',
        ], 200);
    }

    /**
     * Remove the specified staff from the database.
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('customers.staff.index')->with('success', 'Staff deleted successfully');
    }

    /**
     * Search staff based on a query.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $staff = Staff::where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->paginate(10);

        return view('customers.staff.index', compact('staff'));
    }



    
    // Login function
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('staff')->attempt($credentials)) {
            return response()->json(['result' => 'Login successful', 'redirect' => '/dashboard' ], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    // Signup function
    
    /**
     * Store a newly created staff in the database.
     */
    public function register(Request $request)
    {
        try {
            
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'password' => 'required|string|max:100|min:5',
                'email' => 'required|email|unique:staff,email',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $role = Role::where('name', 'Manager')->where('guard_name', 'staff')->first();

            // Create and save the staff
            $staff = $this->staffService->createStaff( array_merge( ['role_id' => $role->id] , $request->only('first_name', 'last_name', 'email', 'password')) );

            $handleRole = $this->staffService->handleRole($request, $staff);

            $handleOTP = $this->staffService->creteOTP($staff);
            
            return response()->json([
                'success' => true,
                'result' => 'Thanks for subscription, Please check your email',
                'redirect' => route('OTP.activate')
            ], 200);

        } catch (\Throwable $th) { 
            $this->addTaskError('Staff store has issue', $th->getMessage(), $request);
           return response()->json([
                'success' => false,
                'title'=> 'An Error',
                'error' => 'We have to solvean issue first, please try it again later.',
            ], 200);
        }
    }


    // Logout function
    public function logout()
    {
        Auth::logout();
        return response()->json(['result' => 'Logged out successfully'], 200);
    }

}
