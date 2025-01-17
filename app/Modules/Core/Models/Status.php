<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    
    protected $table = 'status_list';

    protected $primaryKey = 'status_id';

    protected $fillable = ['business_id', 'name', 'model', 'color', 'sort', 'created_by'];

    

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
