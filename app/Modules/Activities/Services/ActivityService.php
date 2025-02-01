<?php

namespace App\Modules\Activities\Services;

use App\Modules\Activities\Models\ActivityModel;

use App\Models\Auth;

class ActivityService
{

    public function query($request)
    {
        $activityModel = new ActivityModel();

        return $activityModel->all();
    }
}
