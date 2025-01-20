<?php

namespace App\Modules\Estimates\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Customers\Models\Client;
use App\Modules\Core\Models\Status;

class Estimate extends Model
{
    protected $table = 'estimates';

    protected $fillable = ['business_id', 'title', 'content', 'model_type', 'model_id', 'client_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount', 'tax_amount', 'total', 'created_by', 'status_id'];

    public function items()
    {
        return $this->hasMany(EstimateItem::class, 'estimate_id', 'id');
    }

    public function model()
    {
        return $this->morphTo();
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'client_id', 'client_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'status_id', 'status_id');
    }

    
    /**
     * Get Model Name
     */
    public function modelName()
    {
        return basename(str_replace('\\', '/', $this->model_type));
    }

    /**
     * Estimates of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
