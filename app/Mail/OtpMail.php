<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $generatedOTP;

    /**
     * Create a new message instance.
     */
    public function __construct($generatedOTP)
    {
        //
        $this->generatedOTP =  $generatedOTP;
    }

    public function attachments(): array
    {
        return [];
    }

    public function build(){
        return $this->subject('OTP Code')->view('email.otp');
    }
}



