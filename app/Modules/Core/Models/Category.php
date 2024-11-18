<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    
    protected $primaryKey = 'category_id';

    protected $fillable = [
        
        'business_id',
        'model',
        'name',
        'description',
        'created_by',
    ];

}
