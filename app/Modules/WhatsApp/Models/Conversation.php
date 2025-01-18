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
    	'display_phone_number',
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
	
	public function last_message($wa_id, $display_phone_number)
	{
		return Message::where('display_phone_number',$display_phone_number)
		->where('sender_id', $wa_id)
		->orWhere('display_phone_number',$display_phone_number)
		->where('receiver_id', $wa_id)
		->orderBy('created_at','desc')
		->first();
	}

	public function new_messages()
	{
		return $this->hasMany(Message::class, 'sender_id','wa_id')->where('read', 0);
	}
	
	public function messages()
	{
		return $this->hasMany(Message::class, 'display_phone_number','display_phone_number');
	}
	
	public function members()
	{
		return $this->hasMany(ChatMember::class, 'display_phone_number','display_phone_number');
	}
	
	public function isParticipant($userId)
	{
		return $this->hasMany(Message::class, 'display_phone_number','display_phone_number');
	}

    
    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }


}
