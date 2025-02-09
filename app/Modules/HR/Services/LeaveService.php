<?php

namespace App\Modules\HR\Services;

use App\Modules\Core\Models\ModelField;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\HR\Models\Leave;
use App\Modules\HR\Models\LeaveType;
use App\Modules\HR\Models\Shift;

use App\Models\Auth;

class LeaveService
{

    public $model;

    public function __construct(Leave $model)    
    {
        $this->model = $model;
    }

    
    public function loadShifts($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $shift = Shift::forBusiness($business_id);

        return $shift->get();
    }

    
    public function createLeave(array $data)
    {
        return Leave::create($data);
    }
    
    public function updateLeave($id, array $data, $user)
    {
        $item = Leave::forUser($user)->findOrFail($id);
        return $item->update($data);
    }

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $attendance = Leave::forBusiness($business_id);

        
        if ($request->has('user_id') && $request->has('user_type')) {
            $attendance->where('user_id', $request->user_id)->where('user_type', $request->user_type);
        }

        if ($request->has('date')) {
            $date = explode(' - ', $request->date);
            $attendance->whereDate('check_in', '>=', date('Y-m-d', strtotime($date[0])));
            $attendance->whereDate('check_out', '<=', date('Y-m-d', strtotime(' +1 minute', strtotime($date[1]))));
        }

        if ($request->has('month')) {
            $days = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
            $attendance->whereDate('check_in', '>=', date('Y-m-01', strtotime($request->month)));
            $attendance->whereDate('check_in', '<', date('Y-m-'.$days, strtotime($request->month)));
        }

        return $attendance->with('user', 'shift')->get();
    }


    /**
     * Load Types list
     */
    public function queryTypes($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $attendance = LeaveType::forBusiness($business_id);
        return $attendance->get();
    }


    /**
     * Check current user acctive attendance
     */
    public static function getUserActiveLeave()
    {
        $user = Auth::user();
        
        return Leave::forUser($user)->where('check_out', null)->first();
    }
}
