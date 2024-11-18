<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

    protected $table = 'fields';

    protected $primaryKey = 'field_id';

    protected $fillable = [

        'business_id',
        'model',
        'position',
        'title', 
        'code', 
        'type', 
        'default_value',
        'created_by'
    ];

}
