<?php

namespace App\Modules\Core\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Modules\Core\Services\RoleService;
use App\Models\Auth;

class RoleController extends Controller
{


    protected $roleService;


    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }


    /**
     * Display a listing of Roles.
     */
    public function index(Request $request)
    {
        switch (Auth::guardName()) {
            case 'superadmin':
                $Roles = $this->roleService->superadmins();
                break;
            
            default:
                $Roles = $this->roleService->query($request->merge(['guard' => Auth::guardName()]));
                break;
        }

        return view('roles.list', compact('Roles'));
        
    }

    /**
     * Display a listing of Roles.
     */
    public function permissions(Request $request, $id)
    {
        $Permissions = $this->roleService->permissions($request);
        
        $role = $this->roleService->find($id);

        return view('roles.permissions', compact('Permissions', 'role'));
        
    }

    /**
     * Show the form for creating a new Role.
     */
    public function create()
    {
        return view('includes.modals.new-role-modal', ['guard_name'=> 'superadmin']);
    }

    /**
     * Show the form for creating a new Role.
     */
    public function createForStaff()
    {
        return view('includes.modals.new-role-modal', ['guard_name'=> 'staff']);
    }

    /**
     * Store a newly created Role in the database.
     */
    public function store(Request $request)
    {
        
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        // Create and save the Role
        $source = $this->roleService->createRole($request->only('name', 'guard_name'));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }
    

    /**
     * Update the specified Role in the database.
     */
    public function update(Request $request, $id)
    {
        
        // Validate updated data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $update = $this->roleService->updateRole($request->only('name','guard_name'));

        return $update ? response()->json([
            'success' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }


    /**
     * Update the specified Role permissions in the database.
     */
    public function update_permissions(Request $request, $id)
    {
        
        // Validate updated data
        
        $update = $this->roleService->updatePermissions($request->only('permissions'), $id);

        return $update ? response()->json([
            'success' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
            'reload' => true,
        ], 200) : null;

    }

    /**
     * Remove the specified Role from the database.
     */
    public function destroy($id)
    {

        $Role = $this->roleService->find($id);
        
        if ($Role->business_id < 1)
        {
            return $this->hasError("Default roles can't be deleted", 'Validation Error');
        }

        $delete = $this->roleService->deleteRole($id);

        return $delete ? response()->json([
            'success' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
            'reload' => true,
        ], 200) : null;

    }

}
