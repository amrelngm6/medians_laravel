<?php

namespace App\Modules\WhatsApp\Services;

use App\Modules\Customers\Models\Staff;
use App\Modules\WhatsApp\Models\Message;
use App\Modules\WhatsApp\Models\Conversation;
use App\Models\Auth;

class ConversationService
{
    public $model;

    public function __construct(Message $model = null)
    {
        $this->model = $model;
    }
    
    public function find($conversation_id)
    {
        return Conversation::where('conversation_id', $conversation_id)->first();
    }
    
    public function activeConversationsCount($dateStart = '-1days', $dateEnd = '-1days', $userId = 0)
    {
        $check = Conversation::where('user_id', '>', '0')
        ->where('ended', '0')
        ->whereBetween('created_at', [date('Y-m-d', strtotime($dateStart)) , date('Y-m-d', strtotime($dateEnd)) ] );
        
        if ($userId)
            $check = $check->where('user_id', $userId);
        
        return $check->count();
    }

    public function pendingConversationsCount($dateStart = '-1days', $dateEnd = '-1days', $userId = 0)
    {
        
        $check = Conversation::where('user_id', '<', 1)
        ->where('ended', '0')
        ->whereBetween('created_at', [date('Y-m-d', strtotime($dateStart)) , date('Y-m-d', strtotime($dateEnd)) ] );
        
        if ($userId)
            $check = $check->where('user_id', $userId);

        return $check->count();
    }

    public function endedConversationsCount($dateStart = '-1days', $dateEnd = '-1days', $userId = 0)
    {
        
        $check = Conversation::where('ended', '1')
        ->whereBetween('created_at', [date('Y-m-d', strtotime($dateStart)) , date('Y-m-d', strtotime($dateEnd)) ] );
        
        if ($userId)
            $check = $check->where('user_id', $userId);

        return $check->count();
    }

    public function byUser($id)
    {
        return Conversation::with(['contact' => function($q){
            return $q->with('last_message');
        }])
        ->whereHas('members', function($q) use ($id) {
            $q->where('user_id', $id)->where('user_type', Staff::class);
        })->get();
    }

    public function getNew()
    {
        return Conversation::where('status_id', 0)->with(['contact' => function($q){
            return $q->with('last_message');
        }])->get();
    }

    public function getOld()
    {
        $user = Auth::user();
        return Conversation::where('user_id', $user->id())->with(['contact' => function($q){
            return $q->with('last_message');
        }])->get();
    }

    public function checkOld(String $wa_id)
    {
        return Conversation::where('ended', '0')->where('wa_id', $wa_id)->whereDate('created_at', '>', date('Y-m-d H:i:s', strtotime('-1 day')))->first();
    }
    

    public function saveConversation(Array $data)
    {
        $check = Conversation::firstOrCreate(['conversation_id'=> $data['conversation_id'] ]);
        
        return $check->update($data);
    }
    

    public function endConversation(String $id)
    {
        return Conversation::where('id', $id)->update(['ended' => 1]);
    }
    
    public function checkIfActive(Array $data)
    {
        return Conversation::where('ended', '0')->where('wa_id', $data['wa_id'])->where('user_id', $data['user_id'])->orderBy('id','DESC')->first();
    }
    
    
    public function joinConversation(Array $data)
    {
        return Conversation::where('wa_id', $data['wa_id'])
        ->where('ended', '0')
        ->update($data);
    }

}