<?php

namespace App\Modules\Projects\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Auth;
use App\Modules\Projects\Services\ProjectService;
use App\Modules\Projects\Events\ProjectOverviewWidget;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public $tabsPrefix = 'Projects.tabs';

    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }


    public function index()
    {
        $projects = $this->projectService->query();

        // List all projects
        return view('projects::grid', compact('projects'));
    }

    public function store(Request $request)
    {
        
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            // Create and save the Project
            $project = $this->projectService->createProject( $request->only('description', 'name', 'is_paid', 'total_cost', 'start_date', 'deadline_date', 'finished_date', 'status', 'client_id'));
            
            return $project ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    /**
     * Load Modal Create form
     */
    public function create(Request $request)
    {
        $statusList = $this->projectService->loadStatusList();
        $clients = $this->projectService->clients();

        return view('projects::new-project-modal', compact('clients','statusList'));
    }

    /**
     * Load Modal Edit form
     */
    public function edit(Request $request, $id)
    {
        $project = $this->projectService->find($id);

        $statusList = $this->projectService->loadStatusList();

        $clients = $this->projectService->clients();

        return view('projects::edit-project-modal', compact('clients','project','statusList'));
    }

    /**
     * Project settings page
     */
    public function settings(Request $request, $id)
    {
        $project = $this->projectService->find($id);

        $statusList = $this->projectService->loadStatusList();

        $projectTabs = $this->loadModuleTabs($this->tabsPrefix);

        $clients = $this->projectService->clients();

        $custom_fields = $this->projectService->loadModelFields();
        
        return view('projects::settings', compact('clients','project','statusList','projectTabs', 'custom_fields'));
    }

    public function show(Request $request, $id)
    {
        $project = $this->projectService->find($id);
        $projectTabs = $this->loadModuleTabs($this->tabsPrefix);

        $context = ['components' => []];
        // Fire the event
        $event = event(new ProjectOverviewWidget($context, $project));
        $components = $event[0]->context['components'] ?? [];

        // Display a single project
        switch ($request->get('tab')) {
            case 'team':
                break;

            case 'activity':
                break;

            case 'files':
                break;

            case 'tasks':
                return view('projects::tasks', compact('project','projectTabs'));
                break;
            
            default:
                return view('projects::overview', compact('project','projectTabs', 'components'));
                break;
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Validate incoming request datas
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }

            // Update the project
            $project = $this->projectService->updateProject($id, $request->only('name', 'description', 'is_paid', 'total_cost', 'start_date', 'deadline_date', 'finished_date', 'status_id', 'client_id', 'custom_field'));

            return $project ? $this->jsonResponse('Updated successfully', 'Done', true) : null;
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Update Error');
        }
    }

    public function destroy($id)
    {
        // Delete the specified project
    }
}
