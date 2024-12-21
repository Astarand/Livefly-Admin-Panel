<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Mail\AdminContactFormMail;
use App\Mail\UserContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Store the contact form data and send emails.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $this->validateContactForm($request);

        // Save the validated data into the database
        $this->saveContactFormData($validatedData);

        // Prepare the admin email data
        $adminEmailData = $this->prepareAdminEmailData($validatedData);

        // Send email to the admin
        $this->sendAdminEmail($adminEmailData);

        // Send acknowledgment email to the user
        $this->sendUserEmail($validatedData['email'], $validatedData['f_name']);

         session()->flash('success', 'Your message has been sent successfully. We will get back to you shortly.');

        // Redirect back to the contact page
        return redirect()->route('contact');
    }

    /**
     * Validate the contact form input data.
     */
    protected function validateContactForm(Request $request)
    {
        return $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'department' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    }

    /**
     * Save the contact form data to the database.
     */
    protected function saveContactFormData(array $validatedData)
    {
        ContactForm::create([
            'first_name' => $validatedData['f_name'],
            'last_name' => $validatedData['l_name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'department' => $validatedData['department'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ]);
    }

    /**
     * Prepare the data for the admin email.
     */
    protected function prepareAdminEmailData(array $validatedData)
    {
        return [
            'name' => $validatedData['f_name'] . ' ' . $validatedData['l_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone_number'],
            'department' => $validatedData['department'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ];
    }

    /**
     * Send the admin email with the contact form details.
     */
    protected function sendAdminEmail(array $adminEmailData)
    {
        Mail::to('care@liveflyhealthcare.com')->send(new AdminContactFormMail($adminEmailData));
    }

    /**
     * Send the user an acknowledgment email.
     */
    protected function sendUserEmail(string $userEmail, string $userName)
    {
        Mail::to($userEmail)->send(new UserContactFormMail([
            'name' => $userName,
        ]));
    }
}
