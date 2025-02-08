<?php

namespace App\Modules\Tasks\Services;

use App\Modules\Tasks\Models\Task;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\ModelMember;
use App\Modules\Core\Models\ModelField;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\Customers\Models\Staff;
use App\Models\Auth;

class TaskService
{
    public $model;

    public function __construct()
    {
        $this->model = new Task;
    }

    public function createTask(array $data)
    {
        // Business logic for creating a task
        $task = Task::create($data);

        if ($task  && isset($data['custom_field']))
        {
            $this->storeCustomFields($task, $data['custom_field']);
        }

        return $task;
    }

    public function createTeam(array $data)
    {
        // Business logic for creating a team
        $team = ModelMember::firstOrCreate($data);

        return $team;
    }

    public function deleteTeam(array $data)
    {
        // Business logic for creating a team
        $team = ModelMember::where($data)->delete();

        return $team;
    }

    public function updateTask($id, array $data)
    {
        // Business logic for updating a task
        $task = Task::find($id);
        $update = $task->update($data);
        
        if ($update  && isset($data['custom_field']))
        {
            $this->storeCustomFields($task, $data['custom_field']);
        }

        return $task;
    }

    public function duplicateWithRelations($id , array $relations)
    {
        // Business logic for duplicating a task
        $task = Task::find($id);

        $newTask = $task->duplicateWithRelations($relations);

        return $newTask;
    }

    
    public function storeCustomFields(Task $Task, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', Task::class)->where('model_id', $Task->task_id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Task::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($Task);
            $modelData['model_id'] = $Task->task_id;
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



    public function query($request, $modelId = null, $modelType = null)
    {
        // Business logic for querying tasks
        $query = Task::forBusiness(Auth::user()->business_id ?? null)
                 ->with('team','checklist', 'model');

        if (!empty($modelType))
        {
            $query->where('model_type', $modelType);
        }

        if (!empty($modelId) )
        {
            $query->where('model_id', $modelId);
        }

        if (!empty($request->name))
        {
            $query->where('name', 'LIKE', '%'.$request->name.'%');
        }

        if (!empty($request->status_id))
        {
            $query->where('status_id', $request->status_id);
        }
        
        if (!empty($request->client_id))
        {
            $query->where('client_id', $request->client_id);
        }

        if (!empty($request->staff_id))
        {
            $query->whereHas('team', function($q) use ($request){
                return $q->where('user_id', $request->staff_id)->where('user_type', Staff::class);
            });
        }

        if ($request->has('date') ) {
            $date = explode(' - ', $request->date);
            $query->whereDate('created_at', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('created_at', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $query;
    }

    public function find($id)
    {
        // Business logic for querying tasks
        $query = Task::forBusiness(Auth::user()->business_id ?? null)
        ->with('status','project','checklist')->with('comments', function($q){
            return $q->with('user');
        })->with('team', function($q){
            return $q->with('user');
        })->findOrFail($id);

        return $query;
    }

    public function deleteTask($id)
    {
        // Business logic for deleting a task
        $task = Task::forBusiness(Auth::user()->business_id ?? null)->find($id);

        if ($task)
        {
            $deleteRelations = $task->deleteRelations(['comments', 'checklist', 'team']);
            $delete = $task->delete();
            return $delete;
        }
    }
    
    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Task::class)->orderBy('sort', 'ASC')->get();
    }
    
    
    public function loadModelFields()
    {
        return CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Task::class)->get();
    }


}
