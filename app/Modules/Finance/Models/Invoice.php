<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    
    protected $table = 'invoices';

    protected $primaryKey = 'invoice_id';

    protected $fillable = [
        'business_id', 
        'code', 
        'description', 
        'client_id', 
        'date', 
        'due_date', 
        'subtotal', 
        'tax_amount', 
        'discount_amount', 
        'total_cost', 
        'currency_id', 
        'status'
    ];

    
    /**
     * Load related items
     */
    public function items()
    {
        return $this->hasMany(InvoiceItem::class, 'invoice_id', 'invoice_id');
    }
}
