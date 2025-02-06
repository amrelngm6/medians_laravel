<?php

namespace App\Modules\Emails\Services;

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
                    'business_id' => $this->account->business_id
                ]);
            }
            
            return $savedFolder;
            
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    

    public function fetchMessages($folderName, $account, $days = 10)
    {
        $user = Auth::user();
        
        $savedMessages = [];

        $folder = $this->client->getFolder($folderName ?? 'INBOX');
        $messages = $folder->query()->since(now()->subDays($days))->get();

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

    public function accountMessages($account, $folderName = null, $limit = 50, $offset = 0)
    {
        $items = EmailMessage::forAccount($account);

        if ($folderName) {
            $items->where('folder_name', $folderName);
        }

        return $items->orderBy('time', 'DESC')->paginate($limit);
    }

    public function findMessage($id, $account)
    {
        return EmailMessage::forAccount($account)->findOrFail($id);
    }

    public function findFolder($id, $account)
    {
        return EmailFolder::forAccount($account)->find($id);
    }

    public function accountFolders($account)
    {
        $user = Auth::user();

        $items = EmailFolder::forBusiness($user->business_id ?? 0)->forAccount($account)->withCount('messages')->orderBy('messages_count', 'DESC')->get();

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
        return $email;
    }

    public function deleteEmailAccount($id)
    {
        $email = $this->find($id);
        return $email->delete();
    }

    public function sendMail($data, $account)
    {
        $user = Auth::user();
        
        // Calculate size in bytes
        // Convert bytes to KB
        $emailSizeKB = round(mb_strlen($data['message_text'], '8bit') , 2);
        
        $data['sender_email'] = $account->email;
        $data['sender_name'] = $account->email;
        $data['account_id'] = $account->id;
        $data['delivery_date'] =  date('d, M d, Y - H:i:s');
        $data['folder_name'] =  'CRM';
        $data['cc'] =  '';
        $data['reply_to'] =  '';
        $data['size'] = $emailSizeKB;
        $data['time'] =  date('Y-m-d H:i:s');
        $data['message_id'] =  rand(999,999999).$account->emaail;
        $data['message_html'] =  $data['message_text'];
        $data['model_id'] =  $user->id();
        $data['model_type'] =  get_class($user);
        $data['business_id'] =  $user->business_id ?? 0;
        
        $message = EmailMessage::firstOrCreate($data);

        // Set mail configuration dynamically
        Config::set('mail.mailers.smtp', [
            'transport' => 'smtp',
            'host' => $account->imap_host,
            'port' => '465',
            'encryption' => 'ssl',
            'username' => $account->imap_username,
            'password' => $account->imap_password,
            'timeout' => null,
            'auth_mode' => null,
        ]);

        Config::set('mail.from.address', $account->email);
        Config::set('mail.from.name', $account->email);

        try {
            // return Mail::to($message->email)->send(new OTPEmail($user, $message->su));
            return  Mail::to($message->email)->send(new SendMail($message)) ? true : false;
            
        } catch (\Throwable $th) {
            throw $th;
        }


    }
}
