<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\NurseMaster;
use App\Models\Appointment;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request with custom error messages
        $validatedData = $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'exp_year' => 'required|string|max:10',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'required|string|max:100',
            'pincode' => 'required|string|max:10',
            'exp_certificate' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'highest_qualification' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'aadhar_card' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'pan_card' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ], [
            'required' => 'The :attribute field is required.',
            'mimes' => 'The :attribute must be a file of type: pdf, jpg, png.',
            'max' => 'The :attribute must not be larger than 2MB.',
        ]);

        try {
            // Store files in their respective folders with unique names
            $exp_certificate_path = $request->file('exp_certificate')->storeAs(
                'public/uploads/experience_certificate',
                uniqid('exp_nurse_') . '.' . $request->file('exp_certificate')->getClientOriginalExtension()
            );

            $highest_qualification_path = $request->file('highest_qualification')->storeAs(
                'public/uploads/highest_qualification',
                uniqid('qual_nurse_') . '.' . $request->file('highest_qualification')->getClientOriginalExtension()
            );

            $aadhar_card_path = $request->file('aadhar_card')->storeAs(
                'public/uploads/aadhar',
                uniqid('aadhar_nurse_') . '.' . $request->file('aadhar_card')->getClientOriginalExtension()
            );

            $pan_card_path = $request->file('pan_card')->storeAs(
                'public/uploads/pan',
                uniqid('pan_nurse_') . '.' . $request->file('pan_card')->getClientOriginalExtension()
            );

            // Save data into the database
            NurseMaster::create([
                'f_name' => $validatedData['f_name'],
                'l_name' => $validatedData['l_name'],
                'email' => $validatedData['email'],
                'phone_number' => $validatedData['phone_number'],
                'exp_year' => $validatedData['exp_year'],
                'address1' => $validatedData['address1'],
                'address2' => $validatedData['address2'],
                'city' => $validatedData['city'],
                'pincode' => $validatedData['pincode'],
                'exp_certificate' => $exp_certificate_path,
                'highest_qualification' => $highest_qualification_path,
                'aadhar_card' => $aadhar_card_path,
                'pan_card' => $pan_card_path,
            ]);

            return redirect()->back()->with('success', 'Form submitted successfully.');

        } catch (\Exception $e) {
            // Handle errors
            return redirect()->back()->withErrors('An error occurred while submitting the form. Please try again.');
        }
    }

    public function saveAppointment(Request $request)
    {
        // Validate the form data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone_no' => 'required|numeric',
            'email' => 'required|email',
            'service' => 'required|string',
            // 'service_request_for' => 'required|string',
        ]);

        // Save the data in the database
        Appointment::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'service' => $request->service,
            'service_request_for' => $request->service_request_for ?: null, 
            // 'service_request_for' => $request->service_request_for ?: null,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Appointment Apply successfully!');
    }
    public function saveEmergencyAppointment(Request $request)
    {
        // Validate the form data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            // 'phone_no' => 'required|numeric',
            // 'email' => 'required|email',
            // 'service' => 'required|string',
            // 'service_request_for' => 'required|string',
        ]);

        
        $equipmentString = implode(", ", $request->select_equipment);

        
        Appointment::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone_no' => $request->phone_no,

            'address1' =>  $request->address1, 
            'address2' =>  $request->address2,
            'city' =>  $request->city,
            'pincode' =>  $request->pincode,
            'patient_name' =>  $request->patient_name, 
            

            'service' => $request->service,

            'patient_condition' =>  $request->patient_condition,
            'apt_date' =>  $request->apt_date, 
            'apt_time' =>  $request->apt_time, 
            'apt_message' =>  $request->apt_message, 
            'equipmentString' =>  $equipmentString,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Appointment Apply successfully!');
    }
}
