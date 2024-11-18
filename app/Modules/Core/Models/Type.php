<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $table = 'model_types';

    protected $primaryKey = 'type_id';

    protected $fillable = [

        'model',
        'name', 
        'description', 
        'created_by'
    ];

}
