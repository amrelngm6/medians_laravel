<?php

namespace App\Modules\NLP\Models;

use Illuminate\Database\Eloquent\Model;


class NLPChat extends Model
{
    
    protected $table = 'nlp_chat';

    protected $fillable = ['business_id', 'description', 'reply', 'model_name', 'user_type', 'user_id'];
    


    
    /**
     * Load related user as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }


}
