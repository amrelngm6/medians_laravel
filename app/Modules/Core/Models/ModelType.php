<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class ModelType extends Model
{

    protected $table = 'model_types';

    protected $fillable = [

        'model_type',
        'model_id',
        'name', 
        'created_by'
    ];

}
