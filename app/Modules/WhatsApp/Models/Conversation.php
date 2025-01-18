<?php

namespace App\Modules\WhatsApp\Models;

use Illuminate\Database\Eloquent\Model;


class Conversation extends Model 
{

	/**
	* @var String
	*/
	protected $table = 'wp_conversations';


	protected $fillable = [
    	'business_id',
    	'conversation_id',
    	'phone_number_id',
    	'user_id',
    	'user_type',
    	'wa_id',
    	'ended',
    	'status_id',
	];

	
	public function contact()
	{
		return $this->hasOne(Contact::class, 'wa_id','wa_id');
	}
	
	public function last_message()
	{
		return $this->hasOne(Message::class, 'conversation_id','conversation_id')->orderBy('id', 'DESC');
	}

	public function new_messages()
	{
		return $this->hasMany(Message::class, 'sender_id','wa_id')->where('read', null);
	}
	
	public function messages()
	{
		return $this->hasMany(Message::class, 'conversation_id','conversation_id');
	}
	
	public function members()
	{
		return $this->hasMany(ChatMember::class, 'conversation_id','conversation_id');
	}
	
	public function isParticipant($userId)
	{
		return $this->hasMany(Message::class, 'conversation_id','conversation_id');
	}

    
    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }


}
