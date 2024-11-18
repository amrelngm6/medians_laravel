<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{

    protected $table = 'invoice_items';

    protected $fillable = [
        'business_id',
        'model_id',
        'model_type',
        'invoice_id',
        'subtotal',
        'discount_amount',
        'tax_amount',
        'total',
        'status',
        'created_by'
    ];

}
