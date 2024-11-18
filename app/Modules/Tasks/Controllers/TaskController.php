<?php

namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index(Request $request)
    {

        // List tasks
        switch ($request->get('view')) {
            case 'kanban':
                return view('tasks.kanban');
                break;
            
            default:
                return view('tasks.list');
                break;
        }
    }

    public function store($projectId)
    {
        // Store a new task under a project
    }

    public function show($projectId, $id)
    {
        // Show details for a specific task
    }

    public function update($projectId, $id)
    {
        // Update a task in the specified project
    }

    public function destroy($projectId, $id)
    {
        // Delete a task from the specified project
    }
}
