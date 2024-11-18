<?php

namespace App\Modules\Chat\Models;

use Illuminate\Database\Eloquent\Model;


class Participant extends Model
{
    
    protected $table = 'chat_participants';

    protected $fillable = ['business_id', 'room_id', 'user_id', 'user_type', 'is_moderator'];

    
    /**
     * Load related Messages
     */
    public function user()
    {
        return $this->belongsTo();
    }


}
