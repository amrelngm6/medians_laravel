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
        return $query->whereHas("subject", function ($q) use ($businessId) {
            return $q->where('business_id', [$businessId, 0]);
        });

    }
    
    /**
     * Load Templates of Business Scope
     */
    public function scopeModel($query, $model)
    {  
        return $query->whereHas("subject", function ($q) use ($model) {
            return $q->whereHas("model", function ($q) use ($model) {
                return $q->where('model_id', $model->{$model->getKeyName()})->where('model_type', get_class($model));
            });
        });
    }

}
