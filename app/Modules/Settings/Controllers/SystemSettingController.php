<?php

namespace App\Modules\Settings\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Settings\Services\SystemSettingService;

class SystemSettingController extends Controller
{

    protected $settingService;

    function __construct(SystemSettingService $SystemSettingService)
    {
        $this->settingService = $SystemSettingService;
    }

    public function index()
    {
        $settingFields = [];
        $modules = $this->settingService->loadModules();

        return view('settings::edit', compact('settingFields', 'modules'));
    }

    public function store()
    {
        // Store a new SystemSetting
    }

    public function show($id)
    {
        // Display a single SystemSetting
    }

    public function update(Request $request)
    {
        // Create and update 
        $update = $this->settingService->updateSetting(request()->all());
        
        return $update == true ? $this->jsonResponse('Created successfully') : null;
        
    }

    public function destroy($id)
    {
        // Delete the specified SystemSetting
    }


    
    public function basic()
    {
        return view('settings::basic');
    }


}
