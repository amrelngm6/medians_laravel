<?php

namespace App\Modules\Proposals\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    
    protected $table = 'proposals';

    protected $fillable = ['business_id', 'title', 'content', 'model_type', 'model_id', 'user_type', 'user_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount'. 'tax_amount', 'total', 'created_by', 'status_id'];


}
