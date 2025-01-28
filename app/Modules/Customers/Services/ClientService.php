<?php

namespace App\Modules\Customers\Services;

use App\Modules\Customers\Models\Client;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Core\Models\Status;
use App\Modules\OTP\Models\OTPService;
use App\Models\Auth;

class ClientService
{
    
    
    public function query($request = null)
    {
        $query = Client::forBusiness(Auth::user()->business_id);
        
        if (!empty($request->name)) {
            $searchTerm = $request->name;
            $query->where(function ($query) use ($searchTerm) {
                $query->where('first_name', 'like', "%$searchTerm%")
                      ->orWhere('last_name', 'like', "%$searchTerm%")
                      ->orWhere('email', 'like', "%$searchTerm%")
                      ->orWhere('phone', 'like', "%$searchTerm%");
            });
        }

        if (isset($request->status_id) && is_numeric($request->status_id))
        {
            $query->where('status', $request->status_id ?? '0');
        }
        
        if (isset($request->role_id) && is_numeric($request->role_id)){
            $query->where('role_id', $request->role_id);
        }

        if (!empty($request->date) ) {
            $date = explode(' - ', $request->date);
            $transaction->whereDate('created_at', '>=', date('Y-m-d', strtotime($date[0])));
            $transaction->whereDate('created_at', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $query->with('business','location_info')->get();
    }
    
    public function find($id)
    {
        return Client::forBusiness(Auth::user()->business_id ?? 0)->with('business','location_info')->findOrFail($id);
    }

    public function createCustomer(array $data)
    {
        // Create and save the Client
        $client = Client::firstOrCreate($data);

        return $client;
    }

    public function updateCustomer($id, array $data)
    {
        // Find the Client
        $Client = $this->find($id);

        if ($Client  && isset($data['location_info']))
        {
            $saveLocation = $this->createLocationInfo($Client, $data['location_info']);
        }

        // Update Client details
        return $Client->update($data);
    }

    
    public function creteOTP(Client $Client)
    {
        
        $otpService = new OTPService;
        
        $arr = ['user_type'=>get_class($Client), 'user_id'=> $Client->client_id];

        return $otpService->createOTP($arr, $Client);
    }

    
    public function createLocationInfo(Client $Client, $data)
    {
        // Append Model as Morph
        $modelData = [];
        $modelData['model_type'] = get_class($Client);
        $modelData['model_id'] = $Client->client_id;

        $locationInfo = LocationInfo::firstOrCreate($modelData);

        return $locationInfo->update($data);
    }

    /**
     * Get active Client list
     */
    public function loadClient()
    {
        return Client::activeForBusiness(Auth::user()->business_id ?? 0)->get(); 
    }

    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Client::class)->get();
    }

}
