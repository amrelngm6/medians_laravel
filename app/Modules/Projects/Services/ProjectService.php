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

        $project = Project::create($data);

        if ($project  && isset($data['custom_field']))
        {
            $this->storeCustomFields($project, $data['custom_field']);
        }

        return $project;
    }

    public function updateProject($id, array $data)
    {
        // Find the project
        $project = $this->find($id);

        if ($project  && isset($data['custom_field']))
        {
            $this->storeCustomFields($project, $data['custom_field']);
        }

        // Update project details
        return $project->update($data);
    }

    
    public function storeCustomFields(Project $Project, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', Project::class)->where('model_id', $Project->project_id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Project::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($Project);
            $modelData['model_id'] = $Project->project_id;
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
