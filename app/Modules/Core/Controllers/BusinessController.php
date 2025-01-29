<?php

namespace App\Modules\Core\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;


use App\Models\Auth;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Services\BusinessService;
use App\Modules\Core\Services\CategoryService;
use App\Modules\Packages\Services\PackageService;

class BusinessController extends Controller 
{


    protected $businessService;


    public function __construct(BusinessService $businessService)
    {
        $this->businessService = $businessService;
    }


    /**
     * Display a listing of Business.
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        // if (!$user->load('role.permissions')->role->hasPermissionTo('Business view')) {
        //     abort(401, 'Unauthorized');
        // }

        $BusinessList = Auth::guardName() == 'superadmin' ? $this->businessService->all($request) : [$this->businessService->find($user->business->business_id ?? 0)];
        $categoryService = new CategoryService;
        $categories = $categoryService->getBusinessCats();
        
        return view('business.list', compact('BusinessList', 'categories'));
    }

    /**
     * Display a overview of Business.
     */
    public function overview(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Business view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $Business = $this->businessService->find($id);
        
        return view('business.overview', compact('Business'));
    }

    
    /**
     * Show the form for creating a new Business.
     */
    public function create(Request $request)
    {

        $user = Auth::user();

        if ($user->cannot('Business create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }
        $categoryService = new CategoryService;
        $categories = $categoryService->getBusinessCats();

        return view('includes.modals.new-business-modal', compact('categories'));
    }
    
    /**
     * Show the form for creating a new Business.
     */
    public function edit(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Business create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $business_id = $request->business_id;
        
        $categoryService = new CategoryService;
        $categories = $categoryService->getBusinessCats();

        return view('includes.modals.edit-business-modal', compact('categories', 'business_id'));
    }


    /**
     * Store a newly created Business in the database.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        
        if ($user->cannot('Business create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }


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
        
        // Create and save the Business
        $source = $this->businessService->createBusiness(array_merge($request->only('name', 'owner_id','category_id'), ['created_by' => auth()->user()->staff_id]));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }
    

    /**
     * Update the specified Business in the database.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        
        if ($user->cannot('Business edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

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
        
        $update = $this->businessService->updateBusiness($request->only('name', 'owner_id','category_id', 'business_id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified Business from the database.
     */
    public function destroy($id)
    {
        $user = Auth::user();
        
        if ($user->cannot('Business delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $Business = Business::findOrFail($id);
        $Business->delete();

        return redirect()->route('Business.index')->with('success', 'Business deleted successfully');
    }


    /**
     * New Business for staff 
     */
    public function businessSubscription(Request $request)
    {

        $packageService = new PackageService;
        $packages = $packageService->getActive();

        $categoryService = new CategoryService;
        $categories = $categoryService->getBusinessCats();

        return view('business.business-subscription', compact('packages', 'categories'));
    }


    /**
     * Create business by Staff Admin
     */
    public function subscribeBusiness(Request $request) 
    {
        
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'business.name' => 'required|string|max:255',
            'business.category_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $staff = Auth::user();

        $businessInfo = $request->only('business');

        // Create and save the Business
        $business = $this->businessService->createBusiness(array_merge($businessInfo['business'], ['owner_id' => $staff->staff_id, 'created_by' => $staff->staff_id]));

        $staff->update(['business_id' => $business->business_id]);
        
        return $business ? response()->json([
            'success' => true,
            'title' => 'Done',
            'redirect' => '/',
            'result' => 'Created',
        ], 200) : null;
    }

}
