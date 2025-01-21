<?php

namespace App\Modules\Goals\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Goals\Services\GoalService;
use App\Modules\Projects\Services\ProjectService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class GoalController extends Controller
{
    protected $goalService;

    public function __construct(GoalService $goalService)
    {
        $this->goalService = $goalService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Goal view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $goals = $this->goalService->query($request);

        $statusList = $this->goalService->loadStatusList();
        $categories = $this->goalService->loadCats();

        $model = $this->goalService->model;

        return view('goals::list', compact('goals', 'model', 'statusList', 'categories'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $goals = $this->goalService->query($request);

        $model = $this->goalService->model;

        return view('goals::rows', compact('goals', 'model'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Goal create')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->goalService->modules();
        $statusList = $this->goalService->loadStatusList();
        $categories = $this->goalService->loadCats();
        $staff = $this->goalService->staff();

        return view('goals::add-goal-modal', compact('modules', 'user', 'statusList', 'staff', 'categories'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Goal edit')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->goalService->modules();

        $goal = $this->goalService->find($id);

        return view('goals::edit', compact('modules', 'user', 'goal'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'amount' => 'required|integer|min:1',
            'status_id' => 'required|integer',
            'category_id' => 'required|integer',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $info = [
            'business_id'=> $user->business_id ?? 0,
            'created_by'=> $user->staff_id ?? 0,
            'model_id'=> $request->model_id ?? $user->staff_id,
            'model_type'=> $request->model_type ?? get_class($user),
        ];

        $source = $this->goalService->createGoal(array_merge($request->only('amount', 'description', 'date', 'status_id', 'category_id'), $info));  

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        $user = Auth::user();

        if ($user->cannot('Goal view')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->goalService->modules();

        $statusList = $this->goalService->loadStatusList();

        $goal = $this->goalService->find($id);

        return view('goals::goal', compact('modules', 'user', 'statusList', 'goal'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status_id' => 'integer',
            'date' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402);
        }

        $update = $this->goalService->updateGoal($id, $request->only('status_id', 'date'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updated',
        ], 200) : null;
    }

    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->cannot('Goal delete')) {
            return response()->json([
                'success' => false,
                'title' => 'Unauthorized',
                'error' => 'No permission to delete goals',
            ], 200);
        }

        $delete = $this->goalService->deleteGoal($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Goal deleted successfully',
        ], 200) : null;
    }

    
    /**
     * Show Estimates of project.
     * at Project page.
     */
    public function project(Request $request, $id)
    {
        $user = Auth::user();

        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $request->model_type = get_class($project);
        $goals = $this->goalService->query($request);
        $statusList = $this->goalService->loadStatusList();
        $categories = $this->goalService->loadCats();

        return view('goals::project', compact('categories', 'project', 'goals', 'projectTabs', 'statusList', 'user'));
    }
}
