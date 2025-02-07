<?php

namespace App\Modules\Emails\Services;

use App\Modules\Core\Models\ModelField;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\Emails\Models\EmailAccount;
use App\Modules\Emails\Models\EmailMessage;
use App\Modules\Emails\Models\EmailFolder;
use App\Modules\Emails\Services\SendMail;
use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;
use Webklex\IMAP\Facades\Client;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;

class EmailAccountService
{
    public $model;

    protected $client;

    protected $account;

    public function __construct(EmailAccount $model)    
    {
        $this->model = $model;
    }

    public function connect($account)
    {
        $this->account = $account;

        $this->client = Client::make([
            'host' => $this->account->imap_host,
            'port' => $this->account->imap_port,
            'encryption' => 'ssl',
            'validate_cert' => false,
            'username' => $this->account->imap_username,
            'password' => $this->account->imap_password,
            'protocol' => 'imap',
        ]);

        $this->client->connect();

        return $this;
    }


    public function fetch()
    {

        try {

            $folders = $this->client->getFolders();

            foreach ($folders as $folder) {
                $savedFolder = EmailFolder::firstOrCreate([
                    'name' => $folder->name,
                    'email' => $this->account->email,
                    'account_id' => $this->account->id,
                    'business_id' => $this->account->business_id
                ]);
            }
            
            return $savedFolder;
            
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    

    public function fetchMessages($folderName, $account, $days = 10, $limit = 25)
    {
        $user = Auth::user();
        
        $savedMessages = [];

        $folder = $this->client->getFolder($folderName ?? 'INBOX');
        $messages = $folder->query()->since(now()->subDays($days))->limit($limit)->get();

        foreach ($messages as $message) {
            $data = [];
            $data['model_id'] =  $user->id();
            $data['model_type'] =  get_class($user);
            $data['email'] =  $message->getTo()[0]->mail;
            $data['delivery_date'] =  $message->delivery_date;
            $data['folder_name'] =  $message->getFolder()->name;
            $data['subject'] =  substr($message->subject, 0, 190);
            $data['sender_name'] =  $message->from;
            $data['sender_email'] =  $message->getFrom()[0]->mail;
            $data['size'] = $message->size; 
            $data['account_id'] = $account->id;
            $data['time'] =  $message->date;
            $data['message_id'] =  $message->message_id;
            $data['message_uid'] =  $message->getUid();
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

    public function findFolder($id, $account)
    {
        return EmailFolder::forAccount($account)->find($id);
    }

    public function accountFolders($account)
    {
        $user = Auth::user();

        $items = EmailFolder::forBusiness($user->business_id ?? 0)->forAccount($account)->withCount(['messages'=> function($q) use ($account) {
            return $q->where('account_id', $account->id);
        }])->orderBy('messages_count', 'DESC')->get();

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
        ->with(['folder'=> function($q){
            return $q->whereHas('messages');
        }])
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

        $fields = $data['fields'] ? $this->storeCustomFields($data['fields']) : null;

        return $email;
    }

    public function deleteEmailAccount($id)
    {
        $email = $this->find($id);
        return $email->delete();
    }

    public function deleteFolder($id)
    {
        try {
            
            $folder = $this->findFolder($id, $this->account);

            $remoteFolder = $this->client->getFolder($folder->name);

            $delete = $folder->delete();

            return  $remoteFolder->delete();
            
        } catch (\Throwable $th) {
            // $folder->delete();
            throw $th;
        }
    }

    /**
     * Store custom fileds for 
     * Email Account Settings
     */
    public function storeCustomFields(EmailAccount $account, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', EmailAccount::class)->where('model_id', $account->id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', EmailAccount::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($account);
            $modelData['model_id'] = $account->id;
            $modelData['field_id'] = $field->id ?? 0;
            $modelData['title'] = $field->title ?? '';
            $modelData['position'] = $field->sort ?? 0;
            $modelData['business_id'] = Auth::user()->business_id ?? 0;
            $modelData['code'] = $key;
            $modelData['value'] = is_array($value) ? implode(',', $value) : $value;
            $created = ModelField::firstOrCreate($modelData);
        }

        return $created;
    }

}
