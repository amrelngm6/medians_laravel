<?php

namespace App\Modules\Emails\Services;

use App\Modules\Emails\Models\EmailAccount;
use App\Modules\Emails\Models\EmailMessage;
use App\Modules\Emails\Models\EmailFolder;
use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;
use Webklex\IMAP\Facades\Client;

class EmailAccountService
{
    public $model;

    protected $client;

    public function __construct(EmailAccount $model)    
    {
        $this->model = $model;
    }

    public function fetch($account)
    {

        $this->client = Client::make([
            'host' => $account->imap_host,
            'port' => $account->imap_port,
            'encryption' => 'ssl',
            'validate_cert' => false,
            'username' => $account->imap_username,
            'password' => $account->imap_password,
            'protocol' => 'imap',
        ]);

        try {

            $this->client->connect();

            $folders = $this->client->getFolders();

            foreach ($folders as $folder) {
                $savedFolder = EmailFolder::firstOrCreate([
                    'name' => $folder->name,
                    'email' => $account->email,
                    'business_id' => $account->business_id
                ]);

                $saveMessages = $this->fetchMessages($folder->name, $account);

            }
            
            return $saveMessages;
            
        } catch (\Throwable $th) {
            throw $th;
        }

        
    }

    

    public function fetchMessages($folderName, $account)
    {
        $user = Auth::user();
        
        $savedMessages = [];

        $folder = $this->client->getFolder($request->folder ?? 'INBOX');
        $messages = $folder->query()->since(now()->subDays(30))->get();

        foreach ($messages as $message) {
            $data = [];
            $data['model_id'] =  $user->id();
            $data['model_type'] =  get_class($user);
            $data['email'] =  $message->to;
            $data['delivery_date'] =  $message->delivery_date;
            $data['folder_name'] =  $message->getFolder()->name;
            $data['subject'] =  $message->subject;
            $data['sender_name'] =  $message->from;
            $data['sender_email'] =  $message->getFrom()[0]->mail;
            $data['size'] = $message->size;
            $data['time'] =  $message->date;
            $data['message_id'] =  $message->message_id;
            $data['message_text'] =  $message->getTextBody();
            $data['message_html'] =  $message->getHTMLBody();
            $data['cc'] =  $message->getCc();
            $data['reply_to'] =  $message->getReplyTo();
            $data['business_id'] =  $user->business_id ?? 0;
            
            $savedMessages[] = EmailMessage::firstOrCreate($data);
        }

        return $savedMessages;
    }

    public function findAccount($id)
    {
        $user = Auth::user();
        
        return EmailAccount::forUser($user)->findOrFail($id);
    }

    public function accountMessages($email)
    {
        $items = EmailMessage::forEmail($email)->get();

        return $items;
    }

    public function accountFolders($account)
    {
        $user = Auth::user();

        $items = EmailFolder::forBusiness($user->business_id ?? 0)->forEmail($account->email)->get();

        return $items;
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

    public function createEmailAccount(array $data)
    {
        return EmailAccount::create($data);
    }

    public function updateEmailAccount($id, array $data)
    {
        $email = $this->find($id);
        $email->update($data);
        return $email;
    }

    public function deleteEmailAccount($id)
    {
        $email = $this->find($id);
        return $email->delete();
    }
}
