<?php

namespace App\Modules\Emails\Services;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

use App\Modules\Emails\Models\EmailMessage;

class SendMail extends Mailable
{

    use Queueable, SerializesModels;


    public function __construct(public EmailMessage $EmailMessage)
    {
        $this->EmailMessage = $EmailMessage;
    }

     /**
     * Get the message content definition.
     */
    public function envelope(): Envelope
    {        
        return new Envelope(
            subject: $this->EmailMessage->subject,
            from: [$this->EmailMessage->sender_email => $this->EmailMessage->sender_name]
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
                'message' => $this->EmailMessage,
            ],
        );
    }

}
