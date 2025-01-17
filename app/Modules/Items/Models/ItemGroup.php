<?php

namespace App\Modules\Items\Models;

use Illuminate\Database\Eloquent\Model;

class ItemGroup extends Model
{
    
    protected $table = 'item_groups';

    protected $fillable = ['business_id', 'name', 'created_by'];

    
    /**
     * Load Items of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
