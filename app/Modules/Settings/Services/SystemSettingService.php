<?php

namespace App\Modules\Settings\Services;

use App\Modules\Settings\Models\SystemSetting;
use App\Models\Auth;
use App\Models\Module;

class SystemSettingService
{
    public function createSystemSetting(array $data)
    {
        // Business logic for creating a SystemSetting
    }

    public function updateSetting(array $data)
    {
        $update = null;

        $createdBy = Auth::user()->id;

        foreach ($data as $key => $value) 
        {
            $item = SystemSetting::firstOrCreate(['code' => $key]);
            $update = $item->update(['value' => $value, 'created_by' => $createdBy]);
        }

        // Business logic for updating a SystemSetting
        return $update;
    }

    public function deleteSystemSetting($id)
    {
        // Business logic for deleting a SystemSetting
    }

    
	public function loadModules() 
	{
        return  Module::getActiveHasSetting();
	}

}
