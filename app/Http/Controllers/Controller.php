<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

use App\Modules\Core\Models\Status;
use App\Modules\Tasks\Services\TaskService;
use App\Modules\Tasks\Models\Task;
use App\Models\Auth;

abstract class Controller
{

    function __construct() 
    {
        
    }

    /**
     * Return JSON response if has Error
     */
    function hasError($errors, $title = 'Error occurred') 
    {
        return response()->json([
            'success' => false,
            'title' => $title,
            'errors' => $errors,
            'error' => is_object($errors) ? json_encode($errors) : $errors
        ], 422);
    }

    /**
     * Return JSON response if success response
     */
    function jsonResponse($msg, $title = 'Done', $reload = null , $redirect = false) 
    {
        return response()->json([
            'success' => true,
            'redirect' => $redirect,
            'reload' => $reload,
            'title' => $title,
            'result' => $msg,
        ], 200);
    }

    /**
     * Handle Module Tabs Menu 
     */
    public function loadModuleTabs($prefix)
    {
        
        $tabsList = [];

        $routes = Route::getRoutes();
        foreach ($routes as $key => $value) {
            $name = $value->getName();
            if (strpos($name, $prefix) > -1) {
                $tabsList[$key] = ['route' => $name, 'name' => ucfirst(str_replace($prefix.'.', '',$name))];
            }
        }

        return $tabsList;
        
    }

    /**
     * Handle Module Tabs Menu 
     */
    public function status($id, $model)
    {
        return Status::default([Auth::user()->business_id ?? 0, 0])->where('model', $model)->where('name', 'LIKE',  '%'. $id .'%',)->first()->status_id ?? null;
    }
    
    /**
     * Add task to project if catched an error
     */
    public function addTaskError($title, $details, $request)
    {
        $data = [];
        try {
            $details = json_encode($request->all()) .'<br />'. $details;
            // Fields list
            // 'name','description','model_id','model_type','start_date','due_date','finished_date','priority_id','is_public','is_paid','points','sort','visible_to_client','status_id','custom_field'
            $data['name'] = $title;
            $data['description'] = $details;
            $data['model_id'] = 1;
            $data['model_type'] = \App\Modules\Projects\Models\Project::class;
            $data['due_date'] = date('Y-m-d', strtotime('+7 days'));
            $data['status_id'] = 13;
            $data['created_by'] = 0;
            $data['business_id'] = 3;

            // $taskService = new TaskService;
            $task = Task::firstOrCreate($data);
            // $task = $taskService->createTask($data);

            return $task;

        } catch (\Throwable $th) {
            return ;
        }

    }
}
