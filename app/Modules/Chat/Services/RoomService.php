<?php

namespace App\Modules\Chat\Services;

use App\Modules\Chat\Models\ChatRoom;
use App\Modules\Chat\Models\Participant;
use App\Modules\Chat\Models\Message;

class RoomService
{
    public function createRoom(array $data)
    {
        // Business logic for creating a Room
        return ChatRoom::create($data);
    }

    public function updateRoom($id, array $data)
    {
        // Business logic for updating a Room
        $room = ChatRoom::findOrFail($id);
        $room->update($data);
        return $room;
    }

    public function deleteRoom($id)
    {
        // Business logic for deleting a Room
        $room = ChatRoom::findOrFail($id);
        return $room->delete();
    }

    public function addParticipant($roomId, array $data)
    {
        // Business logic for adding a participant to a Room
        $data['room_id'] = $roomId;
        return Participant::create($data);
    }

    public function removeParticipant($roomId, $participantId)
    {
        // Business logic for removing a participant from a Room
        $participant = Participant::where('room_id', $roomId)->findOrFail($participantId);
        return $participant->delete();
    }

    public function sendMessage($roomId, array $data)
    {
        // Business logic for sending a message in a Room
        $data['room_id'] = $roomId;
        return Message::create($data);
    }

    public function deleteMessage($roomId, $messageId)
    {
        // Business logic for deleting a message in a Room
        $message = Message::where('room_id', $roomId)->findOrFail($messageId);
        return $message->delete();
    }
}
