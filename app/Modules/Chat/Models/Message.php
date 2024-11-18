<?php

namespace App\Modules\Chat\Models;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    
    protected $table = 'chat_messages';

    protected $fillable = ['business_id', 'room_id', 'message', 'type', 'user_id', 'user_type', 'sent_at', 'seen_at'];

    
    /**
     * Load related Messages
     */
    public function user()
    {
        return $this->belongsTo();
    }


}
