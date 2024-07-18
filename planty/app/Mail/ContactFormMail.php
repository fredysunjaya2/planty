<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;

    public function __construct($data)
    {
        $this->emailData = $data;
        Log::info('ContactFormMail constructor called with data:', $this->emailData);
    }

    public function build()
    {
        Log::info('ContactFormMail build method called');
        return $this->subject('New Contact Form Submission')
                    ->view('emails.contact-form')
                    ->with('data', $this->emailData);
    }
}
