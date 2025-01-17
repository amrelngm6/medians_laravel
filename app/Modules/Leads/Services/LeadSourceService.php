<?php

namespace App\Modules\Leads\Services;

use App\Modules\Leads\Models\LeadSource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class LeadSourceService
{
    public function query($request) 
    {
        
        // Optionally apply filters and pagination
        $LeadSources = LeadSource::query();

        // If search query is provided, filter by name or email
        if ($request->has('search')) {
            $search = $request->input('search');
            $LeadSources->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
        }

        return $LeadSources->forBusiness(Auth::user()->business_id ?? 0)->paginate(10); // Paginate results

    }

    public function createLeadSource(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;
        
        // Create and save the LeadSource
        $LeadSource = LeadSource::firstOrCreate($data);

        return $LeadSource;
    }

    public function updateLeadSource(array $data)
    {
        
        // Find the LeadSource
        $LeadSource = LeadSource::forBusiness(Auth::user()->business_id ?? 0)->findOrFail($data['source_id']);

        // Update LeadSource details
        return $LeadSource->update($data);

    }
}
