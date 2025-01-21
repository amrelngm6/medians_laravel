<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    
    protected $table = 'status_list';

    protected $fillable = ['business_id', 'status_id', 'name', 'model', 'color', 'sort', 'created_by'];

    /**
     * Load related modules with the same name
     * 
     */
    public function models($id = null)
    {
        return $this->hasMany(Status::class, 'status_id', 'status_id')->where('business_id', $id ?? ($this->business_id ?? '0'));
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
