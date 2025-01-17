<?php

namespace App\Modules\Templates\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    
    protected $table = 'templates';

    protected $fillable = ['business_id', 'name', 'content', 'model', 'created_by'];

    
    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', [$businessId, 0]);
    }

}
