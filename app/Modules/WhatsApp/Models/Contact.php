<?php

namespace App\Modules\WhatsApp\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model 
{

	/*
	/ @var String
	*/
	protected $table = 'wp_contacts';

	protected $fillable = [
		'business_id',
    	'name',
    	'wa_id',
    	'phone_number',
		'user_type',
		'user_id',
    	'picture',
	];


	public $appends = ['unread'];

	public function getUnreadAttribute()
	{
		return( isset($this->last_message->income) && empty($this->last_message->read)) ? 1 : 0;
	}

	public function last_message()
	{
		return $this->hasOne(Message::class, 'sender_id','wa_id')->orderBy('id', 'DESC');
	}

	public function last_sent_message()
	{
		return $this->hasOne(Message::class, 'receiver_id','wa_id')->orderBy('id', 'DESC');
	}

	public function conversations()
	{
		return $this->hasMany(Conversation::class, 'wa_id','wa_id')->orderBy('id', 'DESC');
	}
	
	public function new_conversation()
	{
		return $this->hasOne(Conversation::class, 'wa_id','wa_id')->where('user_id', '<', 1);
	}


}
