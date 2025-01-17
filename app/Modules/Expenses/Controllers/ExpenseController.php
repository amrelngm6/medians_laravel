<?php

namespace App\Modules\Expenses\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Expenses\Services\ExpenseService;
use App\Modules\Projects\Services\ProjectService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class ExpenseController extends Controller
{
    protected $expenseService;

    public function __construct(ExpenseService $expenseService)
    {
        $this->expenseService = $expenseService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Expenses view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $expenses = $this->expenseService->query($request);

        $statusList = $this->expenseService->loadStatusList();
        $categories = $this->expenseService->loadCats();

        $model = $this->expenseService->model;

        return view('expenses::list', compact('expenses', 'model', 'statusList', 'categories'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $expenses = $this->expenseService->query($request);

        $model = $this->expenseService->model;

        return view('expenses::rows', compact('expenses', 'model'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Expenses create')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->expenseService->modules();
        $statusList = $this->expenseService->loadStatusList();
        $categories = $this->expenseService->loadCats();
        $staff = $this->expenseService->staff();

        return view('expenses::add-expense-modal', compact('modules', 'user', 'statusList', 'staff', 'categories'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Expenses edit')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->expenseService->modules();

        $expense = $this->expenseService->find($id);

        return view('expenses::edit', compact('modules', 'user', 'expense'));
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

        $source = $this->expenseService->createExpense(array_merge($request->only('amount', 'description', 'date', 'status_id', 'category_id'), $info));  

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

        if ($user->cannot('Expenses view')) {
            abort(403, 'Unauthorized');
        }

        $modules = $this->expenseService->modules();

        $statusList = $this->expenseService->loadStatusList();

        $expense = $this->expenseService->find($id);

        return view('expenses::expense', compact('modules', 'user', 'statusList', 'expense'));
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

        $update = $this->expenseService->updateExpense($id, $request->only('status_id', 'date'));

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

        if ($user->cannot('Expenses delete')) {
            return response()->json([
                'success' => false,
                'title' => 'Unauthorized',
                'error' => 'No permission to delete expenses',
            ], 200);
        }

        $delete = $this->expenseService->deleteExpense($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Expense deleted successfully',
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
        $expenses = $this->expenseService->query($request);
        $statusList = $this->expenseService->loadStatusList();
        $categories = $this->expenseService->loadCats();

        return view('expenses::project', compact('categories', 'project', 'expenses', 'projectTabs', 'statusList', 'user'));
    }
}
