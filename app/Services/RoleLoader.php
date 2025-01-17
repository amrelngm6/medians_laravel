<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleLoader
{
    public function loadRolesFromModules()
    {
        // $modulesPath = base_path('app/Modules');
        // $modules = File::directories($modulesPath);

        // foreach ($modules as $module) {
        //     $configPath = $module . '/Config/roles.php';

        //     if (File::exists($configPath) && Module::) {

        //         $rolesConfig = require $configPath;

        //         // Load roles
        //         if (isset($rolesConfig['roles'])) {
        //             foreach ($rolesConfig['roles'] as $roleName) {
        //                 Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
        //             }
        //         }

        //         // Load Staff permissions
        //         if (isset($rolesConfig['permissions'])) {
        //             foreach ($rolesConfig['permissions'] as $key =>  $permissionModel) {
        //                 foreach ($permissionModel as $permissionName) {
        //                     Permission::firstOrCreate(['name' => $key.' '. $permissionName, 'guard_name' => 'staff']);
        //                 }
        //             }
        //         }

        //         // Load Superadmin permissions
        //         if (isset($rolesConfig['superadmin_permissions'])) {
        //             foreach ($rolesConfig['superadmin_permissions'] as $key =>  $permissionModel) {
        //                 foreach ($permissionModel as $permissionName) {
        //                     Permission::firstOrCreate(['name' => $key.' '. $permissionName, 'guard_name' => 'superadmin']);
        //                 }
        //             }
        //         }
        //     }
        // }
    }
}
