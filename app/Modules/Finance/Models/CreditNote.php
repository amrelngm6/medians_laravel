<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;


class CreditNote extends Model
{
    
    protected $table = 'credit_notes';

    protected $fillable = ['business_id', 'model_id', 'model_type', 'client_id', 'date', 'terms', 'admin_note', 'client_note', 'subtotal', 'discount_amount', 'tax_amount', 'total', 'reference_no', 'currency_id', 'created_by', 'status'];

    /**
     * Load related Files as Morph
     */
    public function files()
    {
        return $this->morphMany(ModelFile::class, 'model');
    }
    
    /**
     * Load related fields as Morph
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model');
    }
    
    /**
     * Load related Model as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }


}
