<?php

namespace App\Modules\Timesheets\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\Timesheets\Services\TimesheetService;
use App\Modules\Projects\Services\ProjectService;

class TimesheetController extends Controller
{
    protected $service;

    public function __construct(TimesheetService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        $statusList = $this->service->loadStatusList();

        return view('timesheet::list', compact('user','statusList'));
    }

    /**
     * Filter timesheets
     */
    public function filter(Request $request)
    {
        $user = Auth::user();

        $timesheets = $this->service->query($request);

        return view('timesheet::rows', compact('timesheets'));
    }

    /**
     * Show the timesheets at Project page.
     */
    public function project(Request $request, $id)
    {
        $user = Auth::user();

        $projectService = new ProjectService;
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $timesheets = $this->service->query($request, $project->project_id, get_class($project));

        $statusList = $this->service->loadStatusList();

        return view('timesheet::project', compact('project', 'timesheets', 'projectTabs', 'statusList', 'user'));
    }
    


    /**
     * Store a new timesheet
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Store a new Timesheet
        try {
                
            $validator = Validator::make($request->all(), [
                'start' => 'required|date',
                'end' => 'required|date',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $user = Auth::user();
            $userInfo = [
                'business_id' => $user->business_id ?? 0, 
                'created_by' => $user->id() ?? 0
            ];

            $create = $this->service->createTimesheet(array_merge($userInfo, $request->only( 'model_type', 'model_id', 'user_id', 'user_type', 'start', 'end', 'notes','status_id')));

            return response()->json([
                'success' => !empty($create),
                'reload' => !empty($create),
                'title' => $create ? 'Done' : 'Error',
                'result' => $create ? 'Timesheet created successfully' : 'Failed to store' ], 
                $create ? 201 : 422);
        } catch (\Throwable $th) {
            
            return response()->json([
                'error' => $th->getMessage(),
                'title' => 'Error',
                'result' =>'Failed to store' 
                ], 422);
        }

    }

    /**
     * Delete the specified timesheet
     * 
     * @param Request $request
     * @param int $id
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $id)
    {
        try {
                
            // List all Timesheets
            $user = Auth::user();

            if ($user->cannot('Timesheet delete') && Auth::guardName() != 'superadmin') {
                abort(401, 'Unauthorized');
            }

            // Delete the specified Timesheet
            $delete = $this->service->deleteTimesheet($id);

            return $delete ? response()->json(['message' => 'Timesheet deleted successfully'], 200) : null;
            
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }
}
