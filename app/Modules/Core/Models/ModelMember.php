<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class ModelMember extends Model
{

    protected $table = 'model_members';

    protected $fillable = [
        
        'model_id',
        'model_type',
        'user_type',
        'user_id',
        'created_by'
    ];

    
    public function model()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->morphTo();
    }
}
