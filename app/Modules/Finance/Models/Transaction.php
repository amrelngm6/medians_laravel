<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;


class Transaction extends Model
{
    
    protected $table = 'transactions';

    protected $fillable = ['business_id', 'client_id', 'invoice_id', 'amount', 'payment_method_id', 'date', 'status'];


}
