<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Modules\Customers\Models\Staff;
use Illuminate\Support\Facades\Validator;

use App\Modules\Customers\Services\StaffService;
// use App\Models\Auth;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


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

        // Optionally apply filters and pagination
        $staff = Staff::query();

        $StaffList = $staff->with('location_info')->paginate(10); // Paginate results

        return view('customers.staff.index', compact('StaffList'));

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
        $staff = $this->staffService->createStaff($request->only( 'staff_id', 'location_info','first_name', 'last_name', 'email', 'phone', 'position', 'about', 'role_id', 'status'));

        $handlePicture = $this->staffService->handleUploads($request, 'avatar', $staff);

        $handleRole = $this->staffService->handleRole($request, $staff);
        
        return response()->json([
            'success' => true,
            'result' => 'Staff created successfully',
        ], 200);
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
     * Display the specified staff.
     */
    public function settings(Request $request, $id)
    {
        $staffTabs = $this->loadModuleTabs($this->tabsPrefix);
    
        $staff = $this->staffService->find($id);
        
        $statusList = $this->staffService->loadStatusList(); 

        $rolesList = $this->staffService->loadRoles(); 

        return view('customers.staff.settings', compact('staff', 'statusList','staffTabs','rolesList'));
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
        $update = $this->staffService->updateStaff($request->only( 'staff_id', 'location_info','first_name', 'last_name', 'email', 'phone', 'position', 'about', 'role_id', 'status'), $staff_id);

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

        if (Auth::guard('manager')->attempt($credentials)) {
            return response()->json(['result' => 'Login successful', 'user' => Auth::guard('manager')->user() /*, 'redirect' => '/dashboard'*/ ], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

}
