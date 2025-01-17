<?php

namespace App\Modules\OTP\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\OTP\Models\OTP;
use App\Models\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\OTPEmail;


class OTPService
{

    public function find($code)
    {
        return OTP::where('code', $code)->with('user')->first();
    }

    public function query($id, $class)
    {
        $Leads = OTP::query();

        return $Leads->where("user_id", $id)->where('user_type', $class)->with('user')->paginate(100);
    }

    public function createOTP(array $data, $user = null)
    {
        $data['code'] = rand(100001, 999999);
        
        $data['expires_at'] = now()->addMinutes(10);

        $user->otp =  OTP::create($data);
        
        if ($user->otp && isset($user->email)) {
            Mail::to($user->email)->send(new OTPEmail($user, $data));
        }

        return $user->otp;
        
    }

    public function verifyOtp(Request $request)
    {
        try {
            
            $validatedData = $request->validate([
                'otp' => 'required|digits:6',
            ]);

            $otp = $this->find($request->otp);

            if (!$otp ||  $otp->code !== $validatedData['otp']) {
                return [ 'error'=>1, 'message' => 'Invalid OTP'];
            }

            if (empty($otp->user)) {
                return [ 'error'=>1, 'message' => 'Invalid email or OTP'];
            }

            if (now()->greaterThan($otp->expires_at)) {
                return [ 'error'=>1, 'message' => 'OTP has expired'];
            }

            $activateUser = $otp->user->update([
                'status' => true,
                'email_verified_at' => now(),
            ]);

            // $delete = $otp->delete();

            $logn = Auth::guard('staff')->login($otp->user);
            return ['message' => 'Account verified successfully', 'redirect'=>route('dashboard')];

        } catch (\Throwable $th) {
            return ['error'=>1, 'message'=>$th->getMessage()];
        }
    }

    public function deleteOTP($id)
    {
        return OTP::findOrFail($id)->delete();
    }
}
