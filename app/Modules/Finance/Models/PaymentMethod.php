<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    
    protected $table = 'payment_methods';

    protected $primaryKey = 'payment_method_id';

    protected $fillable = ['business_id', 'name', 'picture', 'description', 'created_by', 'status'];


}
