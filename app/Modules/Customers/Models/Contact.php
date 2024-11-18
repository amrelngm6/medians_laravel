<?php

namespace App\Modules\Customers\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table = 'contacts';

    protected $primaryKey = 'contact_id';

    protected $fillable = [
        
        'business_id',
        'model_id',
        'model_type',
        'first_name',
        'last_name',
        'picture',
        'email',
        'company',
        'website',
        'phone',
        'status',
        'created_by'
    ];


    
}
