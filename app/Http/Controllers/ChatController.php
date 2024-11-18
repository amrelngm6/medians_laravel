<?php

namespace App\Http\Controllers;

use App\Domain\Chat\Services\ChatService;
use Illuminate\Http\Request;

abstract class ChatController extends Controller
{
    protected $chatService;

    public function __construct(ChatService $chatService)
    {
        $this->chatService = $chatService;
    }

    public function getMessages($roomId)
    {
        $messages = $this->chatService->getRoomMessages($roomId);
        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'chat_room_id' => 'required|exists:chat_rooms,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string'
        ]);

        $message = $this->chatService->sendMessage($data);
        return response()->json($message, 201);
    }
}
