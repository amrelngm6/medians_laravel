<?php

namespace App\Modules\Chat\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Chat\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index()
    {
        // List all Rooms
    }

    public function store(Request $request)
    {
        // Store a new Room
    }

    public function show($id)
    {
        // Display a single Room
    }

    public function update(Request $request, $id)
    {
        // Update the specified Room
    }

    public function destroy($id)
    {
        // Delete the specified Room
    }

    public function listMessages()
    {
        // List all Messages
        $messages = $this->roomService->getAllMessages();
        return response()->json($messages);
    }

    public function storeMessage(Request $request, $roomId)
    {
        // Store a new Message
        $message = $this->roomService->sendMessage($roomId, $request->all());
        return response()->json($message);
    }

    public function showMessage($id)
    {
        // Display a single Message
        $message = $this->roomService->getMessageById($id);
        return response()->json($message);
    }

    public function updateMessage(Request $request, $id)
    {
        // Update the specified Message
        $message = $this->roomService->updateMessage($id, $request->all());
        return response()->json($message);
    }

    public function destroyMessage($roomId, $messageId)
    {
        // Delete the specified Message
        $this->roomService->deleteMessage($roomId, $messageId);
        return response()->json(['success'=>true, 'result' => 'Message deleted successfully']);
    }
}
