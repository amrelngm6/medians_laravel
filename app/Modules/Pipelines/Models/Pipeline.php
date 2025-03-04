<?php

namespace App\Modules\Pipelines\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Customers\Models\Staff;

class Pipeline extends Model
{
    
    protected $table = 'pipelines';

    protected $fillable = ['business_id', 'name', 'model', 'description', 'sort', 'created_by'];

    /**
     * Load stages
     */
    public function stages()
    {
        return $this->hasMany(PipelineStage::class, 'pipeline_id', 'id')->orderBy('sort', 'ASC');
    }
    
    /**
     * Load Created by Staff
     */
    public function author()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
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
