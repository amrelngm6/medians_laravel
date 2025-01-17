<?php

namespace App\Modules\Packages\Services;

use App\Modules\Packages\Models\Package;
use App\Modules\Packages\Models\PackageFeature;
use App\Models\Module;

class PackageFeatureService
{
    
	public function loadModules() 
	{
        return  Module::getActiveForBusiness();
	}
    
	public function packageFeatures(int $packageId) 
	{
		return PackageFeature::where('package_id', $packageId)->get()->pluck('value', 'code');
	}

    public function createPackageFeature(int $packageId, array $data)
    {
    }

    public function updatePackageFeature($packageId, array $data)
    {
        
        // Check package
        $package = Package::findOrFail($packageId);
        
        // Clear old first
        $clear = PackageFeature::where('package_id',  $packageId)->delete();

        foreach ($data['features'] as $key => $value) 
        {
            $update = PackageFeature::firstOrCreate([
                'package_id' => $packageId,
                'code' => $key,
                'value' => $value
            ]);
        }
        
        return $update;
    }

    public function deletePackageFeature($id)
    {
        // Business logic for deleting a PackageFeature
    }
}
