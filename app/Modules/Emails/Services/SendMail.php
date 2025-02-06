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
        $this->subject = $message->subject;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.test')
                    ->with(['message' => $this->message]);
    }
    
}
