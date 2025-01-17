<?php

namespace App\Modules\OTP\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Modules\OTP\Services\OTPService;
use App\Modules\Leads\Services\LeadService;
use App\Modules\Customers\Services\StaffService;
use App\Models\Auth;

class OTPController extends Controller
{

    
    protected $otpService;


    public function __construct(OTPService $otpService)
    {
        $this->otpService = $otpService;
    }


    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'description' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::guard('staff')->user();

            // Create and save the OTP
            $otp = $this->otpService->createOTP( array_merge(['user_id'=>$user->staff_id, 'user_type'=> get_class($user)], $request->only('description', 'model_id', 'model_type', 'user_id', 'user_type')));
            
            return $otp ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    public function show($id)
    {
        // Display a single OTP
    }

    public function verify(Request $request)
    {
        $verify = $this->otpService->verifyOtp($request);

        if (isset($verify['error']))
        {
            return $this->hasError($verify['message'], 'Error');
        }

        return $this->jsonResponse($verify['message'], 'Thanks', null, $verify['redirect']);
    }

    public function activate(Request $request)
    {
        return  view('pages.otp', []);
    }

    public function destroy($id)
    {
        try {
            return $this->otpService->deleteOTP($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }

    
}
