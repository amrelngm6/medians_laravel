<?php

namespace App\Modules\Languages\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Translation extends Model
{
    
    protected $table = 'translations';

    protected $fillable = ['language_code', 'code', 'value', 'created_by'];

    /**
     * Load related Tasks as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }

    /**
     * Load assigneed Team members
     */    
    public function user()
    {
        return $this->belongsTo();
    }


}
