<?php

namespace App\Modules\Invoices\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{

    protected $table = 'invoice_items';

    protected $fillable = [
        'business_id',
        'model_type',
        'model_id',
        'item_name',
        'invoice_id',
        'quantity',
        'unit_price',
        'subtotal',
        'tax',
        'total',
        'status_id'
    ];


    /**
     * Load related model as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

}
