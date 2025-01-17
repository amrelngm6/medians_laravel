<?php

namespace App\Modules\Packages\Services;

use App\Modules\Packages\Models\Package;

class PackageService
{
    
	public function find($id) 
	{
		return Package::find($id);
	}
    
	public function queryAll() 
	{
		return Package::get();
	}

	public function getActive() 
	{
		return Package::with('features')->where('status', true)->get();
	}

    public function createPackage(array $data)
    {
        return Package::firstOrCreate($data);
    }

    public function updatePackage($id, array $data)
    {
        $package = $this->find($id);

        return $package->update($data);
    }

    public function deletePackage($id)
    {
        // Business logic for deleting a Package
    }
}
