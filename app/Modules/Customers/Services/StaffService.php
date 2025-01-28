<?php

namespace App\Modules\Customers\Services;

use Illuminate\Http\Request;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Core\Models\Role;
use App\Modules\OTP\Services\OTPService;
use App\Models\Auth;

class StaffService
{
    
    public function query($request = null)
    {
        $query = Staff::forBusiness(Auth::user()->business_id);
        
        if (isset($request->status_id) && $request->status_id > -1)
        {
            $query->where('status', $request->status_id ?? '0');
        }
        
        if ($request->has('role_id')) {
            $query->where('role_id', $request->role_id);
        }

        return $query->with('business','location_info')->get();
    }
    
    public function find($id)
    {
        return Staff::where('business_id', Auth::user()->business_id ?? 0)->with('business','location_info')->findOrFail($id);
    }

    public function createStaff(array $data, array $location = null)
    {

        $data['business_id'] = Auth::user()->business_id ?? 0;

        // Create and save the Staff
        $Staff = Staff::firstOrCreate($data);

        if ($Staff  && isset($location))
        {
            $saveLocation = $this->createLocationInfo($Staff, $location);
        }
        
        return $Staff;
    }

    public function updateStaff($id, array $data)
    {
        // Find the Staff
        $Staff = $this->find($id);

        if ($Staff  && isset($data['location_info']))
        {
            $saveLocation = $this->createLocationInfo($Staff, $data['location_info']);
        }

        // Update Staff details
        return $Staff->update($data);
    }

    
    public function creteOTP(Staff $Staff)
    {
        
        $otpService = new OTPService;
        
        $arr = ['user_type'=>get_class($Staff), 'user_id'=> $Staff->staff_id];

        return $otpService->createOTP($arr, $Staff);
    }

    
    public function createLocationInfo(Staff $Staff, $data)
    {
        // Append Model as Morph
        $modelData = [];
        $modelData['model_type'] = get_class($Staff);
        $modelData['model_id'] = $Staff->staff_id;

        $locationInfo = LocationInfo::firstOrCreate($modelData);

        return $locationInfo->update($data);
    }


    public function loadRoles()
    {
        return Role::default(Auth::user()->business_id ?? 0)->get();
    }

    public function handleRole($request,  $staff)
    {

        $role = Role::default(Auth::user()->business_id ?? 0)->find($staff->role_id);

        $staff->assignRole($role->name);
        
        $staff->givePermissionTo(json_decode($role->getPermissionNames()));
    }

    

    /**
     * Get active Staff list
     */
    public function loadStaff()
    {
        return Staff::activeForBusiness(Auth::user()->business_id ?? 0)->get(); 
    }

    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Staff::class)->get();
    }

    
    /**
     * Handle uploading Staff profile picture 
     */
    public function handleUploads($request, String $key = 'avatar', Staff $staff) 
    {
        if (!$request->hasFile($key)) {
            return;
        }

        $request->validate([
            $key => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the file
        ]);

        // Define the target folder
        $targetFolder = public_path('images');
        
        // Ensure the folder exists
        if (!is_dir($targetFolder)) {
            mkdir($targetFolder, 0755, true);
        }

        // Get the uploaded file
        $file = $request->file($key);

        // Define the filename as avatar with the original extension
        $fileName = 'avatar-' .rand(9999,99999).'-'.$staff->staff_id.'.'. $file->getClientOriginalExtension();

        // Move the file to the images folder
        $file->move($targetFolder, $fileName);
        
        $path = 'images/'.$fileName;

        // Save the path to the user's profile
        $update = $staff->update(['picture' => $path]);
        
        return $update;
    }
    
}
