<?php

namespace App\Modules\Milestones\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Milestones\Services\MilestoneService;
use App\Modules\Projects\Services\ProjectService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class MilestoneController extends Controller
{
    protected $milestoneService;

    public function __construct(MilestoneService $milestoneService)
    {
        $this->milestoneService = $milestoneService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Milestones view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $milestones = $this->milestoneService->query($request);

        return view('milestones::list', compact('milestones'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Milestones create')) {
            abort(401, 'Unauthorized');
        }

        $modules = $this->milestoneService->modules();

        return view('milestones::create', compact('modules', 'user'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Milestones edit')) {
            abort(401, 'Unauthorized');
        }

        $modules = $this->milestoneService->modules();

        $milestone = $this->milestoneService->find($id);

        return view('milestones::edit', compact('modules', 'user', 'milestone'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $dates = explode(' - ', $request->date);

        $creator = [
            'created_by' => $user->id(), 
            'start_date' => date('Y-m-d', strtotime($dates[0])),
            'end_date' => date('Y-m-d', strtotime($dates[1])),
            'business_id'=> $user->business_id ?? 0
        ];

        $source = $this->milestoneService->createMilestone(array_merge($request->only('name', 'description', 'start_date', 'end_date', 'model_id', 'model_type', 'client_access', 'sort', 'status_id'), $creator));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        // Display a single Milestone
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $update ? response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402) : null;
        }

        $dates = explode(' - ', $request->date);

        $info = [
            'start_date' => date('Y-m-d', strtotime($dates[0])),
            'end_date' => date('Y-m-d', strtotime($dates[1])),
        ];

        $update = $this->milestoneService->updateMilestone($id, array_merge($request->only('name', 'description', 'start_date', 'end_date', 'model_id', 'model_type', 'client_access', 'sort', 'status_id'), $info));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updated',
        ], 200) : null;
    }

    public function destroy($id)
    {
        $delete = $this->milestoneService->deleteMilestone($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Milestone deleted successfully',
        ], 200) : null;
    }

    
    /**
     * Show the form for managing a Milestore for Project.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $milestones = $this->milestoneService->query($project->project_id, get_class($project)) ?? [];

        return view('milestones::project', [ 'project'=> $project, 'milestones'=>$milestones, 'projectTabs' => $projectTabs ]);
    }
}
