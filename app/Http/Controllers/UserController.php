<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Modules\Core\Models\Role;
use App\Models\Auth;
use App\Services\UserService;


class UserController extends Controller
{
    
    /** Page Tabs route prefix */
    public $tabsPrefix = 'User.tabs';

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    /**
     * Display a listing of Users.
     */
    public function index(Request $request)
    {

        // Optionally apply filters and pagination
        $Users = User::get();

        return view('users.index', compact('Users'));

    }

    
    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $statusList = $this->userService->loadStatusList(); 

        $rolesList = $this->userService->loadRoles(); 

        return view('includes.modals.new-user-modal', compact('statusList', 'rolesList'));
    }
    

    
    /**
     * Store a newly created user in the database.
     */
    public function store(Request $request)
    {

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'file' => 'image|max:2048',
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return $this->hasError($validator->errors(), 'Validation Error');
        }
        
        // Create and save the user
        $user = $this->userService->createUser($request->only( 'name', 'email', 'role_id', 'status'));

        $handlePicture = $this->userService->handleUploads($request, 'avatar', $user);

        $handleRole = $this->userService->handleRole($request, $user);
        
        return response()->json([
            'success' => true,
            'result' => 'User created successfully',
        ], 200);
    }



    // Login function
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('superadmin')->attempt($credentials)) {
            return response()->json(['result' => 'Login successful', 'redirect' => '/dashboard' ], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    // Logout function
    public function logout()
    {
        Auth::guard('staff')->logout();
        Auth::guard('superadmin')->logout();
        return response()->json(['result' => 'Logged out successfully'], 200);
    }
}
