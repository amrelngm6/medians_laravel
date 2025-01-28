<?php

namespace App\Modules\Timesheets\Models;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    
    protected $table = 'timesheets';

    protected $fillable = ['business_id', 'model_type', 'model_id', 'user_type', 'user_id', 'start', 'end', 'notes', 'created_by', 'status_id'];


    /**
     * Relation with Model as morphTo
     */
    public function model()
    {
        return $this->morphTo();
    }

    /**
     * Relation with User as morphTo
     */
    public function user()
    {
        return $this->morphTo();
    }

    public function model_name()
    {
        return basename(str_replace('\\', '/', $this->model_type));
    }

    /**
     * Scope for Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
