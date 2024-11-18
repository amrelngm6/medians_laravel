<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    
    protected $table = 'expenses';

    protected $fillable = ['business_id', 'date', 'name', 'description', 'client_id', 'model_id', 'model_type', 'category_id', 'currency_id', 'amount', 'tax_amount', 'reference_no', 'status', 'created_by'];
 

    /**
     * Load related Model as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }



}
