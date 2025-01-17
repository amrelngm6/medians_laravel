<?php

namespace App\Modules\OTP\Services;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Modules\OTP\Models\OTP;

class OTPMail extends Mailable
{

    use Queueable, SerializesModels;

    public $otp;

    public $subject;

    public function __construct($otp, $subject = 'Your OTP Code')
    {
        $this->otp = $otp;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.otp')
                    ->with(['otp' => $this->otp]);
    }
    
}
