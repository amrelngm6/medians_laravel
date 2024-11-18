<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{

    protected $table = 'model_categories';

    protected $fillable = [
        
        'model_id',
        'model_type',
        'category_id',
        'created_by',
    ];

}
