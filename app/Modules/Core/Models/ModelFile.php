<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class ModelFile extends Model
{

    protected $table = 'model_files';

    protected $fillable = [
        
        'model_id',
        'model_type',
        'file_name', 
        'path', 
        'filetype', 
        'visible_to_customer',
        'external_link',
        'thumbnail_link',
        'user_type',
        'user_id',
        'created_by'
    ];

}
