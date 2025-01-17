<?php

namespace App\Modules\Packages\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Modules\Packages\Services\PackageFeatureService;
use App\Modules\Packages\Services\PackageService;

class PackageFeatureController extends Controller
{

    
    protected $featureService;
    protected $packageService;


    public function __construct(PackageFeatureService $featureService, PackageService $packageService)
    {
        $this->featureService = $featureService;
        $this->packageService = $packageService;
    }


    public function index(Request $request, $packageId)
    {
        $features = $this->featureService->packageFeatures($packageId);

        $modules = $this->featureService->loadModules();

        $package = $this->packageService->find($packageId);

        return view('packages::features', compact('features', 'package', 'modules'));
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

            // Create and save the PackageFeature
            $feature = $this->featureService->createPackageFeature( array_merge(['created_by'=>$user->id], $request->only('status', 'name','description','payment_type','cost_month','cost_quarter','cost_year')));
            
            return $feature == true ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }


    public function update(Request $request, $id)
    {
        try {
            
            // Create and save the PackageFeature
            $feature = $this->featureService->updatePackageFeature( $id, $request->only('features'));
            
            return $feature == true ? $this->jsonResponse('Updated successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }



}
