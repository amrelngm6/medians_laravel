<?php

namespace App\Modules\Chat\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Chat\Services\RoomService;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index()
    {
        // List all Participants
        $participants = $this->roomService->getAllParticipants();
        return response()->json($participants);
    }

    public function store(Request $request, $roomId)
    {
        // Store a new Participant
        $participant = $this->roomService->addParticipant($roomId, $request->all());
        return response()->json($participant);
    }

    public function show($id)
    {
        // Display a single Participant
        $participant = $this->roomService->getParticipantById($id);
        return response()->json($participant);
    }

    public function update(Request $request, $id)
    {
        // Update the specified Participant
        $participant = $this->roomService->updateParticipant($id, $request->all());
        return response()->json($participant);
    }

    public function destroy($roomId, $participantId)
    {
        // Delete the specified Participant
        $this->roomService->removeParticipant($roomId, $participantId);
        return response()->json(['message' => 'Participant removed successfully']);
    }
}
