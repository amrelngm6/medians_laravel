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
     * Load related category as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }


    /**
     * Scope for Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    
    /**
     * Scope for User
     */
    public function scopeForUser($query, $user)
    {
        return $query
        ->where('user_id', $user->id())
        ->where('user_type', get_class($user));
    }

}
