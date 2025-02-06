<?php

namespace App\Modules\Emails\Services;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;

use App\Modules\Emails\Models\EmailMessage;

class SendMail extends Mailable
{

    use Queueable, SerializesModels;


    public function __construct(public EmailMessage $emailMessage)
    {
        $this->emailMessage = $emailMessage;
    }

     /**
     * Get the message content definition.
     */
    public function envelope(): Envelope
    {        
        return new Envelope(
            subject: $this->emailMessage->subject,
            from: new Address($this->emailMessage->sender_email, $this->emailMessage->sender_name) 
        );
    }


     /**
     * Get the message content definition.
     */
    public function content(): Content
    {        
        return new Content(
            view: 'emails.test',
            with: [
                'emailMessage' => $this->emailMessage,
            ],
        );
    }

}
