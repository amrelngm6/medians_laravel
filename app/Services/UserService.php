<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Modules\Customers\Models\User;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\LocationInfo;
use App\Models\Role;

class UserService
{
    
    public function find($id)
    {
        return User::with('location_info')->findOrFail($id);
    }

    public function createUser(array $data)
    {
        // Create and save the User
        $User = User::firstOrCreate($data);

        if ($User  && isset($data['location_info']))
        {
            $saveLocation = $this->createLocationInfo($User, $data['location_info']);
        }

        return $User;
    }

    public function updateUser(array $data, $id)
    {
        // Find the User
        $User = User::findOrFail($id);

        if ($User  && isset($data['location_info']))
        {
            $saveLocation = $this->createLocationInfo($User, $data['location_info']);
        }

        // Update User details
        return $User->update($data);
    }

    
    public function createLocationInfo(User $User, $data)
    {
        // Append Model as Morph
        $modelData = [];
        $modelData['model_type'] = get_class($User);
        $modelData['model_id'] = $User->staff_id;

        $locationInfo = LocationInfo::firstOrCreate($modelData);

        return $locationInfo->update($data);
    }


    public function loadRoles()
    {
        return Role::forBusiness(0)->get();
    }

    public function handleRole($request,  $staff)
    {
        $role = Role::find($staff->role_id);

        $staff->assignRole($role->name);
        
        $staff->givePermissionTo(json_decode($role->getPermissionNames()));
    }

    

    /**
     * Get active User list
     */
    public function loadUser()
    {
        return User::activeForBusiness(0)->get(); 
    }

    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::forBusiness(0)->where('model', User::class)->get();
    }

    
    /**
     * Handle uploading User profile picture 
     */
    public function handleUploads($request, String $key = 'avatar', User $staff) 
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
        $fileName = 'user-avatar-' .rand(9999,99999).'-'.$staff->staff_id.'.'. $file->getClientOriginalExtension();

        // Move the file to the images folder
        $file->move($targetFolder, $fileName);
        
        $path = 'images/'.$fileName;

        // Save the path to the user's profile
        $update = $staff->update(['picture' => $path]);
        
        return $update;
    }
    
}
