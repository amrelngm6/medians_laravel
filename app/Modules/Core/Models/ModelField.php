<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class ModelField extends Model
{

    protected $table = 'model_field';

    protected $fillable = [

        'model_type',
        'model_id',
        'field_id',
        'position',
        'title', 
        'code', 
        'value', 
        'type', 
        'created_by'
    ];

}
