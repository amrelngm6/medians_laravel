<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Artisan;
use ZipArchive;

class ModuleController extends Controller
{

    public function index(Request $request)
    {
        
        return view('modules.list', [
            'modules' => Module::get()
        ]);
    }


    /**
     * Switch Module status
     * 
     */
    public function update(Request $request, $id)
    {
        $module =  Module::findOrFail($id);
        $update =  $module->update(['is_enabled'=> $request->is_enabled]);
        $handleRoles = $this->handleRoles(str_replace(['App\\', 'app/'],'',$module->path));
        $path =  env('APP_ENV') == 'local' ? ($module->path."\\Migrations") : (str_replace('\\', '/', str_replace('App\\', 'app/', $module->path))."/Migrations");
        $migrate = Artisan::call("migrate --path=$path");

        return response()->json(['success'=>1, 'result' => 'Module updated successfully.']);
    }


    /**
     * Install Module from ZIP File
     * Extract at Modules folder
     * 
     */
    public function install(Request $request)
    {
        $request->validate([
            'module' => 'required|file|mimes:zip',
        ]);

        $zipFile = $request->file('module');
        $tempPath = storage_path('app/temp_modules');
        $extractPath = $tempPath ;

        // Create temporary directory
        if (!File::exists($tempPath)) {
            File::makeDirectory($tempPath, 0755, true);
        }

        // Extract ZIP file
        $zip = new \ZipArchive();
        if ($zip->open($zipFile->path()) === true) {
            $zip->extractTo($extractPath);
            $zip->close();
        } else {
            return response()->json(['error' => 'Failed to extract ZIP file.'], 500);
        }

        // Check for module.json
        // Read Config
        $moduleConfigPath = $extractPath . '/module.json';
        if (!File::exists($moduleConfigPath)) {
            return response()->json(['error' => 'module.json not found in the module.'], 400);
        }

        $moduleConfig = json_decode(File::get($moduleConfigPath), true);


        // Move module to app/Modules
        $moduleName = $moduleConfig[0]['name']; // Assuming the ZIP contains a single module directory
        $moduleDir = basename($moduleConfig[0]['path']); // Assuming the ZIP contains a single module directory

        $modulePath = app_path('Modules/' . $moduleDir);
        if (File::exists($modulePath)) {
            // return response()->json(['error' => 'Module already exists.'], 400);
        } else {

            File::move($extractPath . '/' . $moduleDir, $modulePath);
            File::deleteDirectory($extractPath. '/' . $moduleDir);
        }

        foreach ($moduleConfig as $key => $value) {
            
            
            // Add to database
            Module::firstOrCreate([
                'name' => $value['name'],
                'path' => $value['path'],
                'provider' => $value['provider'], 
                'has_settings' => $value['has_settings'] ?? null,
                'business_access' => $value['business_access'] ?? null,
                'limited_features' => $value['limited_features'] ?? null,
                'is_enabled' => true
            ]);

            $this->handleRoles($value['path']);
            $path = $value['path'];
            $migrate = Artisan::call("migrate --path=$path/Migrations");
        }

        Artisan::call('migrate');


        return response()->json(['success'=>1, 'result' => 'Module installed successfully.']);
    }

    /**
     * Handle Roles of the Module
     */
    private function handleRoles($path)
    {
        $configFileFullPath =  str_replace(': ',':', env('APP_ENV') == 'local' ? app_path($path."\\Config\\roles.php") :  app_path($path. '/Config/roles.php'));

        if (File::exists($configFileFullPath)) {

            $rolesConfig = require $configFileFullPath;

            // Load roles
            if (isset($rolesConfig['roles'])) {
                foreach ($rolesConfig['roles'] as $roleName) {
                    $saveRole = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
                }
            }

            // Load Staff permissions
            if (isset($rolesConfig['permissions'])) {
                foreach ($rolesConfig['permissions'] as $key =>  $permissionModel) {
                    foreach ($permissionModel as $permissionName) {
                        $savePermission = Permission::firstOrCreate(['name' => $key.' '. $permissionName, 'guard_name' => 'staff']);
                    }
                }
            }

            // Load Superadmin permissions
            if (isset($rolesConfig['superadmin_permissions'])) {
                foreach ($rolesConfig['superadmin_permissions'] as $key =>  $permissionModel) {
                    foreach ($permissionModel as $permissionName) {
                        $saveSAPermission = Permission::firstOrCreate(['name' => $key.' '. $permissionName, 'guard_name' => 'superadmin']);
                    }
                }
            }
        }
    }
}
