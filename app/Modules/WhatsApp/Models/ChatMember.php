<?php

namespace App\Modules\WhatsApp\Models;

use Illuminate\Database\Eloquent\Model;


class ChatMember extends Model 
{

	/*
	/ @var String
	*/
	protected $table = 'wp_chat_members';


	protected $fillable = [
    	'business_id',
    	'display_phone_number',
    	'staff_id',
    	'can_send',
    	'can_manage',
	];



}
