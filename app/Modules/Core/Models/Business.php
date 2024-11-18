<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{

    protected $table = 'businesses';

    protected $primaryKey = 'business_id';

    protected $fillable = [

        'name',
        'description',
        'category_id',
        'status', 
        'created_by', 
    ];

}
