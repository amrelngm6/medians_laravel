<?php

namespace App\Modules\WhatsApp\Services;

use App\Modules\WhatsApp\Models\Message;
use App\Modules\WhatsApp\Models\Conversation;
use App\Modules\WhatsApp\Models\Contact;


class MessageRepository 
{


    public function messagesCount($dateStart = '-1days', $dateEnd = '-0days', $userId = 0)
    {
        $check =  Message::whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($dateStart)), date('Y-m-d 23:59:00', strtotime($dateEnd)) ]);

        if ($userId)
            $check = $check->where('inserted_by', $userId);

        return $check->count();
    }

    public function messagesCharts($params, $userId = 0)
    {
       
	  	$check = Message::whereBetween('created_at' , [$params['start'] , $params['end']])
		->selectRaw("*, COUNT(*) as y, DATE_FORMAT(created_at, '%Y-%m-%d') as label");

        if ($userId)
            $check = $check->where('inserted_by', $userId);


  		return $check->groupBy('label')->orderBy('label', 'ASC')->get();
    }



    public function saveMessage(Array $data)
    {

        return Message::create([
            'receiver_id' => $data['receiver_id'],
            'sender_id' => $data['sender_id'],
            'message_id' => $data['message_id'],
            'reply_message_id'=> isset($data['reply_message_id']) ? $data['reply_message_id'] : '',
            'message_time'=> isset($data['message_time']) ? $data['message_time'] : '',
            'display_phone_number' => isset($data['display_phone_number']) ? $data['display_phone_number'] : '',
            'message_text' => isset($data['message_text']) ? $data['message_text'] : '',
            'message_json' => isset($data['message_json']) ? $data['message_json'] : '',
            'message_type' => isset($data['message_type']) ? $data['message_type'] : '',
            'media_id'=> isset($data['media_id']) ? $data['media_id'] : '',
            'media_path'=> isset($data['media_path']) ? $data['media_path'] : '',
            'inserted_by'=> isset($data['inserted_by']) ? $data['inserted_by'] : 0,
            'sent' => 1,
            'read' => 0,
            'sent_at' => null,
        ]);
    }

    /**
     * Get unread new messages
     */
    public function getNew($user_id)
    {
         return Conversation::where('user_id', $user_id)
         ->whereHas('new_messages')
         ->with('new_messages')
         ->where('ended', '0')
         ->groupBy('display_phone_number')
         ->get();
    }
 
    
    public function getMessage ($id)
    {
        return Message::find($id);
    }
    
    public function updateMedia(String $mediaId, $newpath = null)
    {
        return Message::where('media_id', $mediaId)->update([
            'media_path'=> $newpath,
        ]);
    }

    public function updateReplyId(String $message_id, String $reply_message_id)
    {
        return Message::where('message_id', $message_id)->update([
            'reply_message_id'=> $reply_message_id,
        ]);
    }

    public function readMessage($message_id)
    {
        return Message::where('message_id', $message_id)->update([
            'read'=> 1,
        ]);
    }

    public function sentMessage($message_id)
    {
        return Message::where('message_id', $message_id)->update([
            'sent'=> 1,
        ]);
    }


    public function loadMessages(String $id = null)
    {
        return Message::with('reply_message')
        ->with('reaction')
        ->where('sender_id' , $id)->orWhere('receiver_id' , $id)
        ->with('reaction')
        ->with('reply_message')
        ->get();
    }

    public function loadContacts()
    {
        return Contact::get();
    }

    public function saveContact($data)
    {
        return Contact::firstOrCreate(
            $data
        );
    }

}
