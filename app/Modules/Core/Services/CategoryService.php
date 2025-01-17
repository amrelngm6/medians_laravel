<?php

namespace App\Modules\Core\Services;

// 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use App\Modules\Core\Models\Category;
use App\Modules\Core\Models\Business;

class CategoryService
{
    
    public function all($request) 
    {
        return Category::get(); // Paginate results
    }
    
    public function query($request) 
    {
        // Optionally apply filters and pagination
        return Category::get(); // Paginate results
    }
    
    public function getBusinessCats() 
    {
        return Category::where('model', Business::class)->get();
    }


    public function createCategory(array $data)
    {
        
        // Create and save the Category
        $Category = Category::firstOrCreate($data);

        return $Category;
    }

    public function updateCategory(array $data)
    {
        
        // Find the Category
        $Category = Category::findOrFail($data['business_id']);

        // Update Category details
        return $Category->update($data);

    }


    public function find(int $id)
    {
        // Find the Category
        return Category::findOrFail($id);
    }
}
