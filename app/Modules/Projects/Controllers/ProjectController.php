<?php

namespace App\Modules\Projects\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        // List all projects
        return view('projects.grid');
    }

    public function store()
    {
        // Store a new project
    }

    public function show(Request $request, $id)
    {
        // Display a single project
        switch ($request->get('tab')) {
            case 'team':
                break;

            case 'activity':
                break;

            case 'files':
                break;

            case 'tasks':
                return view('projects.tasks');
                break;
            
            default:
                return view('projects.overview');
                break;
        }
    }

    public function update($id)
    {
        // Update the specified project
    }

    public function destroy($id)
    {
        // Delete the specified project
    }
}
