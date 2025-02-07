<?php

namespace App\Modules\Projects\Services;

use App\Modules\Projects\Models\Project;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\Core\Models\Status;
use App\Models\Auth;
use App\Modules\Customers\Services\ClientService;

class ProjectService
{
    
    public function query()
    {
        $businessId = Auth::user()->business_id ?? 0;

        $Leads = Project::query();

        return $Leads->forBusiness($businessId)->with('files')->paginate(100);
    }

    public function createProject(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;

        return Project::create($data);
    }

    public function updateProject($id, array $data)
    {
        // Find the project
        $project = $this->find($id);

        // Update project details
        return $project->update($data);
    }

    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Project::class)->get();
    }
    
    /**
     * Get Clients list
     */
    public function clients()
    {
        $ClientService = new ClientService;
        return $ClientService->query();
    }

    public function find(int $id)
    {
        // Find the Role
        return Project::with('client')->findOrFail($id);
    }

    
    public function loadModelFields()
    {
        return CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Project::class)->get();
    }
}
