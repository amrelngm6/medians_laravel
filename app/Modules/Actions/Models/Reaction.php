<?php

namespace App\Modules\Actions\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Reaction extends Model
{
    
    protected $table = 'reactions';

    protected $fillable = ['business_id', 'reaction', 'user_id', 'user_type', 'model_id', 'model_type'];

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
