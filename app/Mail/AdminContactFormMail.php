<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminContactFormMail extends Mailable
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
        return $this->subject('New Contact Form Submission')
                    ->view('emails.admin_contact_form')
                    ->with('contactFormData', $this->contactFormData);
    }
}
