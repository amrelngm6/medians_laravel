<?php

namespace App\Modules\Core\Models;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guard_name',
        'business_id', // Allow mass assignment of business_id
    ];


    /**
     * Load Roles of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

    /**
     * Load Roles of Business
     */
    public function scopeDefault($query, $businessId)
    {
        return $query->whereIn('business_id', [$businessId, 0]);
    }


    /**
     * Load Roles of Business
     */
    public function scopeForStaff($query)
    {
        return $query->where('guard_name', 'staff');
    }

    /**
     * Load Roles of Business
     */
    public function scopeForUser($query)
    {
        return $query->where('guard_name', 'superadmin');
    }

}
