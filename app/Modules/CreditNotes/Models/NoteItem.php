<?php

namespace App\Modules\CreditNotes\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Invoices\Models\InvoiceItem;

class NoteItem extends Model
{

    protected $table = 'credit_note_items';

    protected $fillable = [
        'business_id',
        'credit_note_id',
        'invoice_item_id',
        'unit_price',
        'quantity',
        'subtotal',
        'created_by'
    ];


    /**
     * Load related model as Morph
     */
    public function item()
    {
        return $this->hasOne(InvoiceItem::class,'id','invoice_item_id');
    }

}
