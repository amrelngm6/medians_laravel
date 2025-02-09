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

    
    /**
     * Roles of Business
     */
    public function scopeForModel($query, $model)
    {
        return $query->where([
            'model_id' => $model->{$model->getKeyName()},
            'model_type' => get_class($model)
        ]);
    }

    
    /**
     * Roles of Business
     */
    public function scopeCode($query, $code)
    {
        return $query->where('code', $code);
    }

    
    /**
     * Roles of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }


}
