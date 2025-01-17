<?php

namespace App\Modules\Tasks\Services;

use App\Modules\Tasks\Models\TaskChecklist;
use App\Models\Auth;

class TaskChecklistService
{
    public $model;

    public function __construct()
    {
        $this->model = TaskChecklist::class;
    }

    public function createItem(array $data)
    {
        // Business logic for creating a task
        $task = TaskChecklist::create($data);

        return $task;
    }
    

    public function updateItem($id, array $data)
    {
        // Business logic for updating a task
        $task = TaskChecklist::find($id);
        $update = $task->update($data);

        return $task;
    }

    


    public function query($modelId)
    {
        // Business logic for querying tasks
        $query = TaskChecklist::forBusiness(Auth::user()->business_id ?? 0)
                 ->where('task_id', $modelId)
                 ->orderBy('sort')
                 ->get();

        return $query;
    }

    public function deleteItem($id)
    {
        // Business logic for deleting a task
        return TaskChecklist::forBusiness(Auth::user()->business_id ?? null)->find($id)->delete();
    }
    

}
