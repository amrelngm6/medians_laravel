<?php

namespace App\Modules\Transactions\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Transactions\Services\TransactionService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class TransactionController extends Controller
{
    protected $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Transactions view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $transactions = $this->transactionService->query($request);

        $statusList = $this->transactionService->loadStatusList();

        $model = $this->transactionService->model;

        return view('transactions::list', compact('transactions', 'model', 'statusList'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $transactions = $this->transactionService->query($request);

        $model = $this->transactionService->model;

        return view('transactions::rows', compact('transactions', 'model'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Transactions create') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $modules = $this->transactionService->modules();

        return view('transactions::add-payment-modal', compact('modules', 'user'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Transactions edit') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $modules = $this->transactionService->modules();

        $transaction = $this->transactionService->find($id);

        return view('transactions::edit', compact('modules', 'user', 'transaction'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'custom_field' => 'required|array',
            'model_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $info = [
            'date' => date('Y-m-d'), 
            'status_id' => $this->status('pending', get_class($this->transactionService->model)),
            'business_id'=> $user->business_id ?? 0,
        ];

        $source = $this->transactionService->createTransaction(array_merge($request->only('amount', 'description', 'model_id', 'model_type', 'user_id', 'user_type', 'custom_field', 'payment_method'), $info));  

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

        if ($user->cannot('Transactions view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $modules = $this->transactionService->modules();

        $statusList = $this->transactionService->loadStatusList();

        $transaction = $this->transactionService->find($id);

        return view('transactions::transaction', compact('modules', 'user', 'statusList', 'transaction'));
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

        $update = $this->transactionService->updateTransaction($id, $request->only('status_id', 'date'));

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

        if ($user->cannot('Transactions delete') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $delete = $this->transactionService->deleteTransaction($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Transaction deleted successfully',
        ], 200) : null;
    }
}
