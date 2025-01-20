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
        $this->model = Task::class;
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



    public function query($request, $modelId, $modelType)
    {
        // Business logic for querying tasks
        $query = Task::forBusiness(Auth::user()->business_id ?? null)
                 ->where('model_id', $modelId)
                 ->where('model_type', $modelType)
                 ->with('team','checklist');

        if (!empty($request->name))
        {
            $query->where('name', 'LIKE', '%'.$request->name.'%');
        }

        if (!empty($request->status_id))
        {
            $query->where('status_id', $request->status_id);
        }
        
        if ($request->has('client_id')) {
            $query->where('client_id', $request->client_id);
        }

        if ($request->has('staff_id')) {
            $query->whereHas('team', function($q) use ($request){
                return $q->where('user_id', $request->staff_id)->where('user_type', Staff::class);
            });
        }

        // if ($request->has('date') ) {
        //     $date = explode(' - ', $request->date);
        //     $query->whereDate('due_date', '>=', date('Y-m-d', strtotime($date[0])));
        //     $query->whereDate('due_date', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        // }

        

        return $query->orderBy('sort')->get();
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
        return Task::forBusiness(Auth::user()->business_id ?? null)->where('task_id', $id)->delete();
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
