<?php

namespace App\Modules\Emails\Services;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Modules\Emails\Models\EmailMessage;

class SendMail extends Mailable
{

    use Queueable, SerializesModels;

    public $message;

    public $subject;

    public function __construct(EmailMessage $message)
    {
        $this->message = $message;
    }

    public function build()
    {
        return $this->subject($this->message->subject)
                    ->view('emails.test')
                    ->with(['message' => $this->message]);
    }
    
}
