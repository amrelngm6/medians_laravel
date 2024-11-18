<?php

namespace App\Modules\Estimates\Models;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    
    protected $table = 'estimates';

    protected $primaryKey = 'estimate_id';

    protected $fillable = ['business_id', 'title', 'content', 'model_type', 'model_id', 'client_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount'. 'tax_amount', 'total', 'created_by', 'status'];


}
