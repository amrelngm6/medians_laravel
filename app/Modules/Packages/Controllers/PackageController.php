<?php

namespace App\Modules\Packages\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Modules\Packages\Services\PackageService;
use App\Modules\Core\Services\CategoryService;

class PackageController extends Controller
{

    
    protected $packageService;


    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
    }


    public function index(Request $request)
    {
        $packages = $this->packageService->queryAll();

        return view('packages::list', compact('packages'));
    }

    public function pricing(Request $request)
    {
        $packages = $this->packageService->getActive();

        return view('packages::pricing', compact('packages'));
    }

    public function create(Request $request)
	{
		return view('packages::new-package-modal');
	}

    public function edit(Request $request, $id)
	{
		$package = $this->packageService->find($id);

		return view('packages::edit-package-modal', compact('package'));
	}

    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            // Create and save the Package
            $package = $this->packageService->createPackage( array_merge(['created_by'=>$user->id], $request->only('status', 'name','description','payment_type','cost_month','cost_quarter','cost_year')));
            
            return $package == true ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }


    public function update(Request $request, $id)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Create and save the Package
            $package = $this->packageService->updatePackage( $id, $request->only('status', 'name','description','payment_type','cost_month','cost_quarter','cost_year'));
            
            return $package == true ? $this->jsonResponse('Updated successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }



}
