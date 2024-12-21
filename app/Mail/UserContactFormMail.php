<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactFormData;

    /**
     * Create a new message instance.
     *
     * @param array $contactFormData
     */
    public function __construct($contactFormData)
    {
        $this->contactFormData = $contactFormData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Thank you for your message!')
                    ->view('emails.user_greetings') // Make sure to use the correct view name here
                    ->with('contactFormData', $this->contactFormData);
    }
}
