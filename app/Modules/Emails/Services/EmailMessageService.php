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

class EmailMessageService
{
    public $model;

    protected $account;

    protected $client;

    public function __construct(EmailMessage $model = null)    
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

    public function moveMessage($folderName, $id)
    {
        try {
                
            $message = EmailMessage::findOrFail($id);

            $currentFolder = $this->client->getFolder($message->folder_name);
            
            $mailMessage = $currentFolder->query()->getMessageByUid($message->message_uid);

            $move = $mailMessage->move($folderName);
            
            $update = $message->update(['folder_name'=>$folderName]);

            return $message;

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    
    public function findFolderById($id)
    {
        return EmailFolder::findOrFail($id);
    }

    
    public function updateEmailMessage($id, array $data)
    {
        $email = $this->find($id);
        $email->update($data);



        return $email;
    }

    public function deleteEmailMessage($id)
    {
        $email = $this->find($id);
        $delete = $email->delete();

        return $email;
    }

    
    /**
     * Send email using account configuration
     */
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

            return  Mail::to($message->email)->send(new SendMail($message)) ? true : false;
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
