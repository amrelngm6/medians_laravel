<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class ModelFile extends Model
{
    protected $table = 'model_files';

    protected $fillable = [
        'business_id',
        'model_id',
        'model_type',
        'file_name', 
        'path', 
        'size', 
        'filetype', 
        'mime_type', 
        'visible_to_customer',
        'external_link',
        'thumbnail_link',
        'user_type',
        'user_id',
        'created_by'
    ];

    // Load related model as Morph
    public function model()
    {
        return $this->morphTo();
    }

    // Load related user as Morph
    public function user()
    {
        return $this->morphTo();
    }
}
