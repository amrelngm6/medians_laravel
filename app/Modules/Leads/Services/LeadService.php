<?php

namespace App\Modules\Leads\Services;

use App\Modules\Leads\Models\Lead;
use App\Modules\Core\Models\LocationInfo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\ModelField;
use App\Modules\Customers\Models\Staff;
use App\Modules\Leads\Models\LeadSource;
use App\Modules\CustomFields\Models\CustomField;
use App\Models\Auth;

class LeadService
{

    
    public function find( $id)
    {
        // Find the Lead
        return Lead::forBusiness(Auth::user()->business_id ?? 0)->with('status_model', 'fields', 'location_info')->findOrFail($id);
    }

    public function query($request) 
    {
        // Optionally apply filters and pagination
        $Leads = Lead::query();

        // If search query is provided, filter by name or email
        if ($request->has('search')) {
            $search = $request->input('search');
            $Leads->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
        }

        return $Leads->forBusiness(Auth::user()->business_id ?? 0)->with('source', 'fields', 'status_model')->paginate(10); // Paginate results

    }

    public function createLead(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;
        
        // Create and save the Lead
        $Lead = Lead::create($data);

        if ($Lead  && !empty($data['location_info']))
        {
            $saveLocation = $this->storeLocationInfo($Lead, $data['location_info']);
        }

        if ($Lead  && isset($data['custom_field']))
        {
            $saveLocation = $this->storeCustomFields($Lead, $data['custom_field']);
        }

        return $Lead;
    }

    public function updateLead(array $data, $leadId)
    {
        
        // Find the Lead
        $Lead = Lead::forBusiness(Auth::user()->business_id ?? 0)->findOrFail($leadId);

        if ($Lead  && !empty($data['location_info']))
        {
            $saveLocation = $this->storeLocationInfo($Lead, $data['location_info']);
        }

        if ($Lead  && isset($data['custom_field']))
        {
            $saveLocation = $this->storeCustomFields($Lead, $data['custom_field']);
        }

        // Update Lead details
        return $Lead->update($data);
    }
    

    /**
     * Delete lead from database
     */
    public function deleteLead($id)
    {
        try {
            
            $Role = $this->find($id);
            
            return $Role->delete();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    
    public function storeLocationInfo(Lead $Lead, $data)
    {
        // Append Model as Morph
        $modelData = [];
        $modelData['model_type'] = get_class($Lead);
        $modelData['model_id'] = $Lead->lead_id;

        $locationInfo = LocationInfo::firstOrCreate($modelData);

        return $locationInfo->update($data);
    }

    
    public function storeCustomFields(Lead $Lead, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', Lead::class)->where('model_id', $Lead->lead_id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Lead::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($Lead);
            $modelData['model_id'] = $Lead->lead_id;
            $modelData['field_id'] = $field->id ?? 0;
            $modelData['title'] = $field->title ?? '';
            $modelData['position'] = $field->sort ?? 0;
            $modelData['business_id'] = Auth::user()->business_id ?? 0;
            $modelData['code'] = $key;
            $modelData['value'] = is_array($value) ? implode(',', $value) : $value;
            $created = ModelField::firstOrCreate($modelData);
        }

        return $created;
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
        return Status::default([Auth::user()->business_id, '0'])->where('model', Lead::class)->get();
    }

    /**
     * Get allowed Sources list
     */
    public function loadSources()
    {
        return LeadSource::active(Auth::user()->business_id ?? 0)->get();
    }

    public function loadModelFields()
    {
        return CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Lead::class)->get();
    }

}
