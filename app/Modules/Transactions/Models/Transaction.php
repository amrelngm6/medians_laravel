<?php

namespace App\Modules\Transactions\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Core\Models\Status;



class Transaction extends Model
{
    
    protected $table = 'transactions';

    protected $fillable = ['business_id', 'code', 'user_id', 'user_type', 'model_type', 'model_id', 'amount', 'payment_method', 'date', 'status_id'];

    

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
