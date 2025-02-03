<?php

namespace App\Modules\Deals\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Customers\Models\Staff;
use App\Modules\Customers\Models\Client;
use App\Modules\Leads\Models\Lead;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Core\Models\ModelMember;
use App\Models\Auth;

class Deal extends Model
{
    
    protected $table = 'deals';

    protected $fillable = ['business_id', 'name', 'expected_due_date', 'description', 'amount', 'lead_id', 'client_id', 'status', 'created_by'];

    
    /**
     * Deal Created by Staff
     */
    public function author()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
    }
    
    /**
     *  Client of the Deal 
     */
    public function client()
    {
        return $this->hasOne(Client::class, 'client_id', 'client_id');
    }
    
    /**
     * Deal Created by Staff
     */
    public function lead()
    {
        return $this->hasOne(Lead::class, 'lead_id', 'lead_id');
    }

    /**
     * Deal related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    /**
     * Deal Assigned staff
     */
    public function assigned()
    {
        return $this->morphOne(ModelMember::class, 'model')->with('user');
    }

    
    /**
     * Deal Main Location info
     */
    public function location_info()
    {
        return $this->morphOne(LocationInfo::class, 'model');
    }

    


    /**
     * Deal Items of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

    /**
     * Deal Items of Business Scope
     */
    public function scopeDefault($query, $businessIds)
    {
        return $query->whereIn('business_id', $businessIds);
    }


}
