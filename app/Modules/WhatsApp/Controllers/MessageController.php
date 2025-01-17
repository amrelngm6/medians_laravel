<?php

namespace App\Modules\WhatsApp\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\WhatsApp\Services\MessageService;
use App\Modules\WhatsApp\Services\MessageRepository;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class MessageController extends Controller
{
    protected $service;

    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        return view('whatsapp::messages');
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $messages = $this->service->query($request);

        $model = $this->service->model;

        return view('whatsapp::messages-rows', compact('messages', 'model'));
    }

    public function create(Request $request)
    {
    }

    public function edit(Request $request, $id)
    {
        return view('messages::edit', compact('modules', 'user', 'message'));
    }

    public function store(Request $request)
    {
        // $user = Auth::user();

        // $validator = Validator::make($request->all(), [
        //     'amount' => 'required|integer|min:1',
        //     'status_id' => 'required|integer',
        //     'category_id' => 'required|integer',
        //     'date' => 'required|date',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Validation failed',
        //         'errors' => $validator->errors()
        //     ], 422);
        // }

        // $info = [
        //     'business_id'=> $user->business_id ?? 0,
        //     'created_by'=> $user->staff_id ?? 0,
        //     'model_id'=> $request->model_id ?? $user->staff_id,
        //     'model_type'=> $request->model_type ?? get_class($user),
        // ];

        // $source = $this->service->createMessage(array_merge($request->only('amount', 'description', 'date', 'status_id', 'category_id'), $info));  

        // return $source ? response()->json([
        //     'success' => true,
        //     'title' => 'Done',
        //     'reload' => true,
        //     'result' => 'Created',
        // ], 200) : null;
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'status_id' => 'integer',
        //     'date' => 'date',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'success' => false,
        //         'result' => $validator->errors(),
        //     ], 402);
        // }

        // $update = $this->service->updateMessage($id, $request->only('status_id', 'date'));

        // return $update ? response()->json([
        //     'success' => true,
        //     'reload' => true,
        //     'title' => 'Done',
        //     'result' => 'Updated',
        // ], 200) : null;
    }

    public function destroy($id)
    {
       
    }

    
    /**
     * Show Estimates of project.
     * at Project page.
     */
    public function project(Request $request, $id)
    {
    }

    
	/**
	 * Admin index items
	 * 
	 */ 
	public function loadMedia( $mediaid) 
	{
        $filename = $this->service->saveMedia('/'.$mediaid);

        $repo = new MessageRepository;
        return $repo->updateMedia($mediaid, $filename);
    }


    
}
