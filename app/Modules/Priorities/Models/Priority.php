<?php

namespace App\Modules\Priorities\Models;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    
    protected $table = 'priorities';

    protected $primaryKey = 'priority_id';

    protected $fillable = ['business_id', 'name', 'model', 'color', 'sort', 'created_by'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
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
