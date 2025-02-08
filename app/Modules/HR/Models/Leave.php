<?php

namespace App\Modules\HR\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    
    protected $table = 'hr_leaves';

    protected $fillable = ['business_id', 'leave_type_id', 'user_type', 'user_id', 'start_time', 'end_time', 'days', 'status_id'];


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
