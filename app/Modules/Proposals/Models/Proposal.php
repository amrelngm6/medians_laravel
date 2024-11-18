<?php

namespace App\Modules\Proposals\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    
    protected $table = 'estimates';

    protected $primaryKey = 'estimate_id';

    protected $fillable = ['business_id', 'content', 'model_type', 'model_id', 'client_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount'. 'tax_amount', 'total', 'created_by', 'status'];


}
