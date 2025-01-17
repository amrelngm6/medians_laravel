<?php

namespace App\Modules\Core\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;


use App\Models\Auth;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Services\CategoryService;

class CategoryController extends Controller 
{


    protected $categoryService;


    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    /**
     * Display a listing of Category.
     */
    public function index(Request $request)
    {
        $CategoryList = Auth::guardName() == 'superadmin' ? $this->categoryService->all($request) : [$this->categoryService->find($user->business->id ?? 1)];
        
        return view('category.list', compact('CategoryList'));
    }

    /**
     * Display a overview of Category.
     */
    public function overview(Request $request, $id)
    {

        if ($request->user()->cannot('Category view')) {
            abort(403, 'Unauthorized');
        }

        $Category = $this->categoryService->find($id);
        
        return view('category.overview', compact('Category'));
    }

    
    /**
     * Show the form for creating a new Category.
     */
    public function create(Request $request)
    {

        return view('includes.modals.new-category-modal');
    }


    /**
     * Store a newly created Category in the database.
     */
    public function store(Request $request)
    {
        
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        // Create and save the Category
        $source = $this->categoryService->createCategory(array_merge($request->only('name', 'description', 'color', 'model'), ['created_by' => Auth::user()->staff_id ?? Auth::user()->id]));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }
    

    /**
     * Update the specified Category in the database.
     */
    public function update(Request $request, $id)
    {
        
        // Validate updated data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $update ? response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402) : null;
        }
        
        $update = $this->categoryService->updateCategory($request->only('name', 'owner_id', 'business_id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified Category from the database.
     */
    public function destroy($id)
    {
        
        $Category = Category::findOrFail($id);
        $Category->delete();

        return redirect()->route('Category.index')->with('success', 'Category deleted successfully');
    }

}
