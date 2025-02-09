<?php

namespace App\Modules\HR\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\HR\Services\ShiftService;
use App\Modules\Customers\Services\StaffService;

class ShiftController extends Controller
{
    protected $service;

    public function __construct(ShiftService $service)
    {
        $this->service = $service;
    }


    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Shift view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $shifts = $this->service->query($request);

        return view('shifts::list', compact('user', 'shifts'));
    }


    /**
     * Filter data and return datatable
     */
    public function filter(Request $request)
    {
        $user = Auth::user();


        $model = $this->service->model;

        return view('shifts::rows', compact('shifts', 'model'));
    }


    /**
     * Create Shift Modal
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Shift create')) {
            abort(401, 'Unauthorized');
        }


        return view('shifts::create', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Shift edit') && Auth::guardName() != 'admin') {
            abort(401, 'Unauthorized');
        }

        $staffService = new StaffService;
        $staffList = $staffService->loadStaff();

        $shift = $this->service->find($id);

        return view('shifts::edit', compact( 'user', 'shift', 'staffList'));
    }

    /**
     * Manage staff
     */
    public function show(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Shift edit') && Auth::guardName() != 'admin') {
            abort(401, 'Unauthorized');
        }

        $shift = $this->service->find($id);

        return view('shifts::edit', compact( 'user', 'shift'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Shift create') && Auth::guardName() != 'admin') {
            abort(401, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
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
        ];

        $source = $this->service->createShift(array_merge($request->only('name', 'start_time', 'end_time','saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'), $info));  

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }
    
    
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Shift edit') && Auth::guardName() != 'admin') {
            abort(401, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
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
        ];

        $source = $this->service->updateShift($id, array_merge($request->only('name', 'start_time', 'end_time','saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'staff'), $info));  

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'no_reset' => true,
            'result' => 'Updated successfully',
        ], 200) : null;
    }
    

    
    
    public function destroy($id)
    {
        
        $user = Auth::user();

        if ($user->cannot('Shift delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            return $this->service->deleteShift($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }

}