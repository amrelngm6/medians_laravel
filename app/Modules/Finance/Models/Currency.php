<?php

namespace App\Modules\Finance\Models;

use Illuminate\Database\Eloquent\Model;


class Currency extends Model
{
    
    protected $table = 'currencies';

    protected $primaryKey = 'currency_id';

    protected $fillable = ['business_id', 'name', 'symbol', 'is_default', 'created_by'];


}
