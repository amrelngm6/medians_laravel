<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    
    protected $fillable = [
        
        'business_id',
        'model',
        'name',
        'color',
        'description',
        'created_by',
    ];

    
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
