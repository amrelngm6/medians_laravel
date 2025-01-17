<?php

namespace App\Modules\Core\Services;

use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use App\Models\Auth;

class RoleService
{
    
    public function superadmins() 
    {
        // Optionally apply filters and pagination
        return Role::where('guard_name', 'superadmin')->get(); // Paginate results
    }

    public function query($request) 
    {
        // Optionally apply filters and pagination
        return Role::whereIn('business_id', [Auth::user()->business_id ?? 0, 0])->where('guard_name', $request->guard ?? 'staff')->get(); // Paginate results
    }

    public function permissions($request) 
    {
        // Optionally apply filters and pagination
        $permissions = Permission::where('guard_name', Auth::guardName())->get()->groupBy(function ($permission) {
            return explode(' ', $permission->name)[0]; // Extracts the first word as the module name
        });
        
        return $permissions;
    }


    public function createRole(array $data)
    {
        
        $data['business_id'] = Auth::user()->business_id ?? 0;
        
        // Create and save the Role
        $Role = Role::firstOrCreate($data);

        return $Role;
    }

    public function updateRole(array $data)
    {
        
        // Find the Role
        $Role = $this->find($data['id']);

        // Update Role details
        return $Role->update($data);

    }

    public function updatePermissions(array $data, $id)
    {
        // Find the Role
        $Role = $this->find($id);
    
        // Update Role details
        return $Role->syncPermissions($data);

    }

    public function find(int $id)
    {
        // Find the Role
        return Role::findOrFail($id);
    }
}
