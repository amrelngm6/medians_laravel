<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{

    public function run()
    {

        // Define permissions
        Permission::create(['name' => 'view projects', 'guard_name' => 'staff']);
        Permission::create(['name' => 'show project', 'guard_name' => 'staff']);
        Permission::create(['name' => 'create project', 'guard_name' => 'staff']);
        Permission::create(['name' => 'edit project', 'guard_name' => 'staff']);
        Permission::create(['name' => 'delete project', 'guard_name' => 'staff']);

    }
}
