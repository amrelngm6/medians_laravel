<?php

namespace App\Modules\Customers\Services;

use App\Modules\Customers\Models\Client;
use App\Models\Auth;

class ClientService
{
    
    public function query()
    {
        return Client::forBusiness(Auth::user()->business_id ?? 0)->with('business','location_info')->get();
    }
    
    public function find($id)
    {
        return Client::forBusiness(Auth::user()->business_id ?? 0)->with('business','location_info')->findOrFail($id);
    }

    public function createCustomer(array $data)
    {
        // Business logic for creating a customer
    }

    public function updateCustomer($id, array $data)
    {
        // Business logic for updating a customer
    }
}
