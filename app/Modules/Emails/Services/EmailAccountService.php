<?php

namespace App\Modules\Emails\Services;

use App\Modules\Emails\Models\EmailAccount;
use App\Modules\Emails\Models\EmailMessage;
use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;

class EmailAccountService
{
    public $model;

    public function __construct(EmailAccount $model)    
    {
        $this->model = $model;
    }

    public function fetch($request, $user)
    {
        $settings = EmailAccount::where('email', $request->email)
        ->user($user)
        ->first();

        $client = Client::make([
            'host' => $settings->imap_host,
            'port' => $settings->imap_port,
            'encryption' => 'ssl',
            'validate_cert' => false,
            'username' => $settings->imap_username,
            'password' => $settings->imap_password,
            'protocol' => 'imap',
        ]);

        $client = Client::account('default');

        $client->connect();

        $folder = $client->getFolder($request->folder ?? 'INBOX');
        $messages = $folder->query()->since(now()->subDays(30))->get();

        foreach ($messages as $message) {
            $data = [];
            $data['email'] =  $message->to;
            $data['delivery_date'] =  $message->delivery_date;
            $data['folder_name'] =  $message->getFolder()->name;
            $data['subject'] =  $message->subject;
            $data['sender_name'] =  $message->getSender();
            $data['sender_email'] =  $message->from;
            $data['size'] = $message->size;
            $data['priority'] =  $message->priority;
            $data['message_id'] =  $message->message_id;
            $data['message_text'] =  $message->getTextBody();
            $data['message_html'] =  $message->getHTMLBody();
            $data['cc'] =  $message->getCc();
            $data['reply_to'] =  $message->getReplyTo();
            $data['business_id'] =  $user->business_id ?? 0;

            
        }
    }

    public function query($request)
    {
        $user = Auth::user();
        $items = EmailAccount::query();

        if ($request->has('folder_name')) {
            $items->where('priority_id', $request->priority_id);
        }
        
        if ($request->has('date')) {
            $items->where('date', date('Y-m-d', strtotime($request->date)));
        }
        return $items->where('user_id', $user->id)->paginate();
    }

    

    public function priorities()
    {
        $user = Auth::user();
        return Priority::default([$user->business_id ?? 0, 0])->where('model', EmailAccount::class)->orderBy('sort')->get();
    }


    public function accounts($user)
    {
        return EmailAccount::forBusiness($user->business_id ?? 0)
        ->where('user_id', $user->id())
        ->where('user_type', get_class($user))
        ->get();
    }

    public function find(int $id)
    {
        return EmailAccount::findOrFail($id);
    }

    public function createEmail(array $data)
    {
        return EmailAccount::create($data);
    }

    public function updateEmail($id, array $data)
    {
        $email = $this->find($id);
        $email->update($data);
        return $email;
    }

    public function deleteEmail($id)
    {
        $email = $this->find($id);
        return $email->delete();
    }
}
