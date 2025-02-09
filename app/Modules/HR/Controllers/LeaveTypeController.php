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

        $leave_type = $this->service->findLeaveType($id);

        return view('leaves::edit', compact( 'user', 'leave_type'));
    }



    

    public function store(Request $request)
    {

        $user = Auth::user();

        if ($user->cannot('Leave create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try 
        {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'month_limit' => 'required|integer',
                'annual_limit' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Handle User who created it
            $user = Auth::user();
            $userData = [ 'business_id'=>$user->business_id ?? 0];

            // Create and save the Attendance
            $attendance = $this->service->createLeaveType( array_merge($userData, $request->only('month_limit', 'annual_limit', 'name')) );
            
            return $attendance ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    
    

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Leave edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'month_limit' => 'required|integer',
                'annual_limit' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            

            // Create and save the Attendance
            $update = $this->service->updateLeaveType( $id, $request->only('month_limit', 'annual_limit', 'name')) ;
            
            return $update ? $this->jsonResponse('Updated successfully', 'Updated', true) : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    
    public function destroy($id)
    {
        
        $user = Auth::user();

        if ($user->cannot('Leave delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            return $this->service->deleteLeaveType($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }

    
}