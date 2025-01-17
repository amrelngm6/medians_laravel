<?php

namespace App\Modules\Settings\Services;

use App\Modules\Settings\Models\Package;
use App\Modules\Settings\Models\PackageSubscription;

class SubscriptionService
{
    
	public function getAll() 
	{
		return PackageSubscription::get();
	}

	public function getActive() 
	{
		return PackageSubscription::where('status', 'on')->get();
	}

    public function createPackageSubscription(array $data)
    {
        // Business logic for creating a PackageSubscription
    }

    public function updatePackageSubscription($id, array $data)
    {
        // Business logic for updating a PackageSubscription
    }

    public function deletePackageSubscription($id)
    {
        // Business logic for deleting a PackageSubscription
    }
}
