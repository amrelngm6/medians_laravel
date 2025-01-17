<?php

namespace App\Modules\Milestones\Models;

use Illuminate\Database\Eloquent\Model;


class Milestone extends Model
{
    
    protected $table = 'milestones';

    protected $fillable = ['business_id', 'name', 'description', 'start_date', 'end_date', 'model_id', 'model_type', 'client_access', 'sort', 'created_by', 'status_id'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }


    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', [$businessId, 0]);
    }

}
