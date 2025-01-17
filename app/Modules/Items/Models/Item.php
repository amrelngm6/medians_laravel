<?php

namespace App\Modules\Items\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
    protected $table = 'items';

    protected $fillable = ['business_id', 'name', 'description', 'price', 'tax', 'group_id', 'created_by'];

    public function group()
    {
        return $this->hasOne(ItemGroup::class, 'id', 'group_id');
    }

    /**
     * Load Items of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
