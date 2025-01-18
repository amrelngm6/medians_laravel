<?php

namespace App\Modules\WhatsApp\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\WhatsApp\Services\ConversationService;
use App\Modules\WhatsApp\Services\MessageService;
use App\Modules\WhatsApp\Services\MessageRepository;
use App\Http\Controllers\Controller;
use App\Models\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


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

        $validator = Validator::make($request->all(), [
            'message' => 'required|string',
            'wa_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }


        $ConversationService = new ConversationService();
        $conversation = $ConversationService->find($request->display_phone_number);
        $this->service->setPNID($conversation->phone_number_id ?? null);
        $this->service->sendTextMessage($request->message, $request->wa_id, $request->display_phone_number);
        
        $ConversationController = new ConversationController($ConversationService);
        return $ConversationController->show($request, $request->display_phone_number);
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


    
    
	/**
	 * Webhooks method 
	 * @var Int
	 */
	public function webhook( Request $request)
	{
        $mode = $request->query('hub_mode');
        
        if ($mode == 'subscribe')
        {
            return $this->subscribe($request);
        }
        
        
        $rawData = file_get_contents('php://input');
        $jsonData = json_decode($rawData, true);
        if ($jsonData)
        {
            $jsonData = json_decode(json_encode($jsonData, JSON_PRETTY_PRINT));
        }
        
        if (isset($jsonData->entry[0]->changes[0]->value->messaging_product)){
            $message = isset($jsonData->entry[0]->changes[0]->value->messages[0]) ? $jsonData->entry[0]->changes[0]->value->messages[0] : null;
        }

        

        $repo = new MessageRepository;
        if (isset($jsonData->entry[0]->changes[0]->value->statuses[0]->status) && $jsonData->entry[0]->changes[0]->value->statuses[0]->status == 'read')
        {
            $MessageRepository->readMessage($jsonData->entry[0]->changes[0]->value->statuses[0]->id);
        }

        $this->saveConversation($jsonData);
        
        $this->saveMessage($jsonData, $message);

        $this->saveContact($jsonData);
        

    }

    /**
     * Save conversation
     * 
     */
    public function saveConversation($jsonData)
    {
        $ConversationService = new ConversationService;
        $arr = [
            'wa_id'=> $jsonData->entry[0]->changes[0]->value->contacts[0]->wa_id ?? '',
            'user_id'=> 0,
            'display_phone_number'=> $jsonData->entry[0]->id ?? '',
            'phone_number_id'=> $jsonData->entry[0]->changes[0]->value->metadata->phone_number_id ?? '',
        ];
        return $ConversationService->saveConversation( $arr);
    }

    /**
     * Save message
     */
    private function saveMessage($jsonData, $message)
    {
        
        $MessageRepository = new MessageRepository;

        $jsonFileData = isset($message) ? json_encode($message, JSON_PRETTY_PRINT) : json_encode($jsonData, JSON_PRETTY_PRINT);

        // file_put_contents('uploads/chat/'.$time.'.json', $jsonFileData);
        $time = isset($message->timestamp) ? $message->timestamp : time();
        Storage::put($time.'.json', $jsonFileData);

        $data = array();
        $date['message_time'] = $time;
        $data['display_phone_number'] = $jsonData->entry[0]->id ?? 0;
        $data['name'] = $jsonData->entry[0]->changes[0]->value->contacts[0]->profile->name ?? '';
        $data['sender_id'] = $jsonData->entry[0]->changes[0]->value->contacts[0]->wa_id ?? '';
        $data['receiver_id'] = $jsonData->entry[0]->changes[0]->value->metadata->phone_number_id ?? '';
        $data['message_id'] = isset($message->id) ? $message->id : '';
        $data['message_json'] = serialize($jsonFileData);
        $data = $this->messageTypeHandler($data, $message);
        isset($data['media_id']) ? $this->loadMedia( $data['media_id']) : '';
        return $MessageRepository->saveMessage($data);
    }

    /**
     * Save contact info 
     * 
     */
    public function saveContact($jsonData)
    {
        $MessageRepository = new MessageRepository;

        $contact = array();
        $contact['user_type'] = '';
        $contact['user_id'] = 0;
        $contact['name'] = $jsonData->entry[0]->changes[0]->value->contacts[0]->profile->name ?? '';
        $contact['wa_id'] = $jsonData->entry[0]->changes[0]->value->contacts[0]->wa_id ?? '';
        $contact['phone_number'] = $jsonData->entry[0]->changes[0]->value->contacts[0]->wa_id ?? '';
        return $jsonData->entry[0]->changes[0]->value->contacts[0]->wa_id ? $MessageRepository->saveContact($contact) : null;
    }

    /**
     * Verif the subscription for webhook
     */
    public function subscribe(Request $request)
    {

        $verifyToken = 'medians_wp'; 

        // Get query parameters
        $token = $request->query('hub_verify_token');
        $challenge = $request->query('hub_challenge');

        // Verify token and mode
        if ($mode && $token) {
            if ($mode === 'subscribe' && $token === $verifyToken) {
                Log::info('Webhook verified successfully.');
                return response($challenge, 200); // Respond with the challenge token
            } else {
                Log::warning('Webhook verification failed.');
                return response('Forbidden', 403);
            }
        }

        Log::error('Invalid request for webhook verification. ' . json_encode($request->all()));
        return response('Bad Request', 400);
    }


    

    /**
     * Messages type handler
     * 
     */
    public function messageTypeHandler($data, $message)
    {
 
        $date['reply_message_id'] = isset($message->context->id) 
            ? $message->context->id 
            : (isset($message->reaction->message_id) ? $message->reaction->message_id : null);
        
        $data['message_text'] = isset($message->text->body) ? str_replace("\\","\\\\", $message->text->body) : '';
        
        if (isset($message->type))
        {

            switch ($message->type) {
                case 'document':
                    $data['media_id'] = isset($message->document->id) ? $message->document->id : '';
                    $data['message_text'] = isset($message->document->caption) ? str_replace("\\","\\\\", $message->document->caption) : '';
                    break;
                    
                case 'audio':
                    $data['media_id'] = isset($message->audio->id) ? $message->audio->id : '';
                    $data['message_text'] = isset($message->audio->caption) ? str_replace("\\","\\\\", $message->audio->caption) : '';
                    break;
                    
                case 'video':
                    $data['media_id'] = isset($message->video->id) ? $message->video->id : '';
                    $data['message_text'] = isset($message->video->caption) ? str_replace("\\","\\\\", $message->video->caption) : '';
                    break;
                    
                case 'image':
                    $data['media_id'] = isset($message->image->id) ? $message->image->id : '';
                    $data['message_text'] = isset($message->image->caption) ? str_replace("\\","\\\\", $message->image->caption) : '';
                    break;
                    
                case 'sticker':
                    $data['media_id'] = isset($message->sticker->id) ? $message->sticker->id : '';
                    break;
                    
                case 'reaction':
                    $data['message_text'] = isset($message->reaction->emoji) ? str_replace("\\","\\\\", $message->reaction->emoji) : '';
                    $date['reply_message_id'] = isset($message->reaction->message_id) ? $message->reaction->message_id : null;
                    break;
                    
                default:
                    $data['message_text'] = isset($message->text->body) ? str_replace("\\","\\\\", $message->text->body) : '';
                    break;
            }
        }
            
        $data['message_type'] = isset($message->type) ? $message->type : '';
        $data['message_time'] = isset($message->timestamp) ? $message->timestamp : '';
        $data['media_path'] = isset($data['media_id']) ?  $this->loadMedia($data['media_id']) : '';

        return $data;
    }
    
    

}
