<?php

namespace App\Modules\Core\Models;

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
