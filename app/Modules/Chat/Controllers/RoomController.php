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
        $rooms = $this->roomService->getAllRooms();
        return response()->json($rooms);
    }

    public function store(Request $request)
    {
        // Store a new Room
        $room = $this->roomService->createRoom($request->all());
        return response()->json($room);
    }

    public function show($id)
    {
        // Display a single Room
        $room = $this->roomService->getRoomById($id);
        return response()->json($room);
    }

    public function update(Request $request, $id)
    {
        // Update the specified Room
        $room = $this->roomService->updateRoom($id, $request->all());
        return response()->json($room);
    }

    public function destroy($id)
    {
        // Delete the specified Room
        $this->roomService->deleteRoom($id);
        return response()->json(['success'=>true, 'result' => 'Room deleted successfully']);
    }
}
