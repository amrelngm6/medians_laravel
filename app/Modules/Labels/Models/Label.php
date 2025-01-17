<?php

namespace App\Modules\Labels\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelMember;

class Label extends Model
{
    
    protected $table = 'Labels';

    protected $fillable = ['business_id', 'user_id', 'user_type',  'name', 'model_id', 'model_type'];

    /**
     * Load related Tasks as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }


}
