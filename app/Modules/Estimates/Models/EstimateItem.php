<?php

namespace App\Modules\Estimates\Models;

use Illuminate\Database\Eloquent\Model;

class EstimateItem extends Model
{
    
    protected $table = 'estimate_items';

    protected $fillable = ['business_id', 'estimate_id','item_name','item_id','item_type', 'description',  'quantity', 'unit_price', 'subtotal', 'tax', 'total'];

}
