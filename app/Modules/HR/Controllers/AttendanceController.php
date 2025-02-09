<?php

namespace App\Modules\HR\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\HR\Services\AttendanceService;

class AttendanceController extends Controller
{
    protected $service;

    public function __construct(AttendanceService $service)
    {
        $this->service = $service;
    }


    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Attendance view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $statusList = [];

        $model = $this->service->model;

        return view('attendance::table', compact('model',  'user', 'statusList'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $attendanceList = $this->service->query($request)->unique('user_id');

        $model = $this->service->model;

        $month = date("Y-m", strtotime($request->month));

        return view('attendance::rows', compact('attendanceList', 'model', 'user', 'month'));
    }

    
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Attendance create')) {
            abort(401, 'Unauthorized');
        }

        $shifts = $this->service->loadShifts($request);

        return view('attendance::create', compact('user', 'shifts'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Attendance edit') && Auth::guardName() != 'admin') {
            abort(401, 'Unauthorized');
        }

        $attendance = $this->service->find($id);

        return view('attendance::edit', compact('user', 'attendance'));
    }

    

    public function store(Request $request)
    {

        $user = Auth::user();

        if ($user->cannot('Attendance create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'check_in' => 'required|date',
                'check_out' => 'date',
                'staff_id' => 'required|integer',
                'shift_id' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Handle User who created it
            $user = Auth::user();
            $userData = [ 'user_id'=>$request->staff_id, 'business_id'=>$user->business_id ?? 0, 'platform' => 'web', 'ip' => $this->get_client_ip()];

            // Create and save the Attendance
            $attendance = $this->service->createAttendance( array_merge($userData, $request->only('shift_id', 'check_in', 'check_out', 'user_id', 'user_type')) );
            
            return $attendance ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    /**
     * Finish shift attendance
     */
    public function end(Request $request, $id)
    {

        $user = Auth::user();

        if ($user->cannot('Attendance create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'check_out' => 'date',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Handle User who created it
            $user = Auth::user();
            $userData = [ 'user_id'=>$request->staff_id, 'business_id'=>$user->business_id ?? 0];

            // Create and save the Attendance
            $attendance = $this->service->updateAttendance( array_merge($userData, $request->only('check_out', 'notes')) );
            
            return $attendance ? $this->jsonResponse('Thanks for your work') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    
    public function destroy($id)
    {
        
        $user = Auth::user();

        if ($user->cannot('Attendance delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            return $this->service->deleteAttendance($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }


}