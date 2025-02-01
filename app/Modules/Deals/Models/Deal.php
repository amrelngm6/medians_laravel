<?php

namespace App\Modules\Deals\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Core\Models\ModelMember;

class Deal extends Model
{
    
    protected $table = 'deals';

    protected $fillable = ['business_id', 'name', 'expected_due_date', 'description', 'amount', 'lead_id', 'status', 'created_by'];

    
    /**
     * Load Created by Staff
     */
    public function author()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
    }

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    /**
     * Load Assigned staff
     */
    public function assigned()
    {
        return $this->morphOne(ModelMember::class, 'model')->with('user');
    }

    
    /**
     * Load Main Location info
     */
    public function location_info()
    {
        return $this->morphOne(LocationInfo::class, 'model');
    }


    /**
     * Load Items of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

    /**
     * Load Items of Business Scope
     */
    public function scopeDefault($query, $businessIds)
    {
        return $query->whereIn('business_id', $businessIds);
    }


}
