<?php

namespace App\Modules\Chat\Models;

use Illuminate\Database\Eloquent\Model;


class ChatRoom extends Model
{
    
    protected $table = 'chat_rooms';

    protected $primaryKey = 'room_id';

    protected $fillable = ['business_id', 'name', 'created_by'];


    
    /**
     * Load related Messages
     */
    public function messages()
    {
        return $this->hasMany(Message::class, 'room_id');
    }


}
