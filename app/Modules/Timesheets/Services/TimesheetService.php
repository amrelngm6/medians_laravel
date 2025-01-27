<?php

namespace App\Modules\Timesheets\Services;

use App\Modules\Core\Models\Status;
use App\Modules\Timesheets\Models\Timesheet;
use App\Models\Auth;

class TimesheetService
{
    protected $model;

    public function __construct(Timesheet $model)
    {
        $this->model = $model;
    }
    
    
    
    /**
     * Filter Proposals based on request
     * 
     * @param Request $request
     * @param int $modelId
     * @param string $modelType
     * 
     * @return Collection
     */
    public function query($request, $modelId = null, $modelType = null)
    {
        $query = Timesheet::query();

        if (!empty($modelType) && !empty($modelId)) {
            $query->where("model_id", $modelId)->where('model_type', $modelType);
        }
        
        if (!empty($request->status_id))
        {
            $query->where('status_id', $request->status_id);
        }
        
        if ($request->has('staff_id')) {
            $query->where('user_id', $request->staff_id)->where('user_type', Staff::class);
        }

        if ($request->has('start') ) {
            $date = explode(' - ', $request->date);
            $query->whereDate('start', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('start', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $query->with('user','model')->paginate(100);
    }



    /**
     * Create a new Timesheet
     */
    public function createTimesheet(array $data)
    {
        $timesheet = Timesheet::firstOrCreate($data);

        return $timesheet;
    }

    /**
     * Delete Ttimesheet
     */
    public function deleteTimesheet($id)
    {
        return Timesheet::findOrFail($id)->delete();
    }


    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Timesheet::class)->orderBy('sort', 'ASC')->get();
    }

}
