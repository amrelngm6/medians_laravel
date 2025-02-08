<?php

namespace App\Modules\HR\Services;

use App\Modules\Core\Models\ModelField;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\HR\Models\Attendance;

use App\Models\Auth;

class AttendanceService
{

    public $model;

    public function __construct(Attendance $model)    
    {
        $this->model = $model;
    }

    
    public function createAttendance(array $data)
    {
        return Attendance::create($data);
    }
    
}
