<?php

namespace App\Modules\Pipelines\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Customers\Models\Staff;

class PipelineSelected extends Model
{
    
    protected $table = 'pipeline_selected';

    protected $fillable = ['business_id', 'pipeline_id', 'pipeline_stage_id', 'model_id', 'model_type', 'created_by'];

    /**
     * Load related category as Morph
     */
    public function pipeline()
    {
        return $this->hasOne(Pipeline::class,'id','pipeline_id');
    }

    
    /**
     * Load Created by Staff
     */
    public function author()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
    }

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
