<?php

namespace App\Modules\Leads\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\LocationInfo;

class LeadSource extends Model
{

    protected $table = 'leads_sources';

    protected $primaryKey = 'source_id';

    protected $fillable = [
        
        'business_id',
        'name',
        'status',
        'created_by'
    ];

    
    /**
     * Load Main Contact
     */
    public function contact()
    {
        return $this->morphOne(Contact::class, 'model');
    }

    
    /**
     * Load Main Location info
     */
    public function location_info()
    {
        return $this->morphOne(LocationInfo::class, 'model');
    }

    
    /**
     * Load Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    
    /**
     * Load Items of Business
     */
    public function scopeActive($query, $businessId)
    {
        return $query->forBusiness($businessId)->where('status', 1);
    }

}
