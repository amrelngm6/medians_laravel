<?php

namespace App\Modules\Events\Models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    
    protected $table = 'events';

    protected $primaryKey = 'event_id';

    protected $fillable = ['business_id', 'title', 'description', 'model_id', 'model_type', 'user_id', 'user_type', 'start', 'end', 'is_public', 'status'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }


}
