<?php

namespace App\Modules\Goals\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\ModelCategory;
use App\Modules\Customers\Models\Staff;



class Goal extends Model
{
    
    protected $table = 'goals';

    protected $fillable = ['business_id', 'description', 'amount', 'code', 'model_type', 'model_id', 'created_by',  'payment_method', 'date', 'status_id'];

    

    /**
     * Load related model as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    
    /**
     * Load related user as Morph
     */
    public function user()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
    }

    

    /**
     * Load related category
     */
    public function category()
    {
        return $this->morphOne(ModelCategory::class, 'model')->with('category');
    }

    /**
     * Load related user
     */
    public function status()
    {
        return $this->hasOne(Status::class, 'status_id', 'status_id');
    }

    
    
    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', [$businessId, 0]);
    }

}
