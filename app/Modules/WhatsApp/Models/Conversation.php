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
    	'user_id',
    	'wa_id',
    	'ended',
	];

	
	public function contact()
	{
		return $this->hasOne(Contact::class, 'wa_id','wa_id');
	}
	
	public function new_messages()
	{
		return $this->hasMany(Message::class, 'sender_id','wa_id')->where('read', null);
	}
	
	public function messages()
	{
		return $this->hasMany(Message::class, 'conversation_id','conversation_id');
	}

}
