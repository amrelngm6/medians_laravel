<?php

namespace App\Modules\HR\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Core\Models\ModelField;


class LeaveType extends Model
{
    
    protected $table = 'hr_leave_types';

    protected $fillable = ['business_id',  'name', 'month_limit', 'annual_limit', 'paid'];


    
    /**
     * Load related fields as Morph
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model');
    }
    

    /**
     * Scope for Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    

}
