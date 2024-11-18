<?php

namespace App\Modules\CustomFields\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class CustomField extends Model
{
    
    protected $table = 'custom_fields';

    protected $fillable = ['business_id', 'title', 'code', 'value', 'model_id', 'model_type'];

    /**
     * Load related Tasks as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }

}
