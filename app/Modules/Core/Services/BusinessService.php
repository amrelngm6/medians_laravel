<?php

namespace App\Modules\Core\Services;

// 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use App\Modules\Core\Models\Business;

class BusinessService
{
    
    public function all($request) 
    {
        return Business::with('owner')->get(); // Paginate results
    }
    
    public function query($request) 
    {
        // Optionally apply filters and pagination
        return Business::with('owner')->get(); // Paginate results
    }


    public function createBusiness(array $data)
    {
        
        // Create and save the Business
        $Business = Business::firstOrCreate($data);

        return $Business;
    }

    public function updateBusiness(array $data)
    {
        
        // Find the Business
        $Business = Business::findOrFail($data['business_id']);

        // Update Business details
        return $Business->update($data);

    }


    public function find(int $id)
    {
        // Find the Business
        return Business::findOrFail($id);
    }
}
