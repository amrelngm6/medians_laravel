<?php

namespace App\Modules\Goals\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Core\Models\Status;
use App\Modules\Customers\Models\Staff;



class Goal extends Model
{
    
    protected $table = 'goals';

    protected $fillable = ['business_id', 'description', 'name', 'user_type', 'user_id', 'model_type', 'model_id', 'due_date', 'date', 'status_id'];

    

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
        return $this->morphTo();
    }

    
    /**
     * Get Model Name
     */
    public function modelName()
    {
        return basename(str_replace('\\', '/', $this->model_type));
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
