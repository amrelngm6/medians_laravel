<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\CustomFields\Models\CustomField;

class ModelField extends Model
{

    protected $table = 'model_fields';

    protected $fillable = [

        'model_type',
        'model_id',
        'field_id',
        'position',
        'title', 
        'code', 
        'value', 
        'business_id', 
    ];

    public function field()
    {
        return $this->hasOne(CustomField::class, 'id', 'field_id');
    }

}
