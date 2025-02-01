<?php

namespace App\Modules\Activities\Models;

use Spatie\Activitylog\Models\Activity;



class ActivityModel extends Activity
{
    


    
    /**
     * Load related user as Morph
     */
    public function user()
    {
        return $this->causer();
    }

    
    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', [$businessId, 0]);
    }

}
