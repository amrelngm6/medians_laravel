<?php

namespace App\Modules\HR\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\HR\Services\LeaveService;

class LeaveTypeController extends Controller
{
    protected $service;

    public function __construct(LeaveService $service)
    {
        $this->service = $service;
    }


    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Leave view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $leave_types = $this->service->queryTypes($request);

        return view('leaves::categories', compact('user', 'leave_types'));
    }


    
    /**
     * Create LeaveType Modal
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Leave create')) {
            abort(401, 'Unauthorized');
        }


        return view('leaves::create', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Leave edit') && Auth::guardName() != 'admin') {
            abort(401, 'Unauthorized');
        }

        $staffService = new StaffService;
        $staffList = $staffService->loadStaff();

        $leave_type = $this->service->find($id);

        return view('leaves::edit', compact( 'user', 'leave_type', 'staffList'));
    }
    
}