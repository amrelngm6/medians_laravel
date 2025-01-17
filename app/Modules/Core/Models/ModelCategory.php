<?php

namespace App\Modules\Core\Models;

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

    
    /**
     * Load related model as Morph
     */
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

}
