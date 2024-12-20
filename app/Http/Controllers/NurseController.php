<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class NurseController extends Controller
{
    public function NewNurse(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
            // Fetch all nurses from the 'nurse_master' table where del_status = 1
            $nurses = DB::table('nurse_master')
                    ->where('del_status', 1)
                    ->where('nurse_status', 0)
                    ->get();

            // Pass the nurses data to the view
            return view('nurse.new-nurse', compact('nurses'));
    }

    public function Nurse(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $nurses = DB::table('nurse_master as nm')
                ->where('nm.del_status', 1)
                ->where('nm.nurse_status', 1)
                ->orderBy('nm.id', 'desc')
                ->leftJoin('service_master as sm', 'nm.id', '=', 'sm.nurse_id')
                ->leftJoin('appointments as a', 'sm.customer_id', '=', 'a.id')
                ->select(
                    'nm.*', 
                    'sm.customer_id',
                    'sm.service_start_date', 
                    'sm.service_end_date', 
                    'a.fname', 
                    'a.lname'
                    
                )
                ->get();

        // echo '<pre>';
        // print_r($nurses);
        // die();
        // $nurses = DB::table('nurse_master')
        //             ->where('del_status', 1)
        //             ->where('nurse_status', 1)
        //             ->orderBy('id', 'desc')
        //             ->get();

        return view('nurse.nurse', compact('nurses'));
    }

    public function AddNurse(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        return view('nurse.add-nurse');
    }

    public function moveToNurse($id)
    {   
        $todayDate = now();
        DB::table('nurse_master')
            ->where('id', $id)
            ->update([
                'nurse_status' => 1,
                'service_stared' => $todayDate, // Update the service_stared field with today's date
            ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Nurse status updated successfully!');
    }
    public function rejectNurse($id)
    {
        DB::table('nurse_master')
        ->where('id', $id)
        ->update(['del_status' => 0]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Nurse Reject successfully!');
    }

    public function saveNurse(Request $request)
    {
        // Validate the request
        $request->validate([
            'f-name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'service_stared' => 'required|date',
            'exp_certificate' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'highest_qualification' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'aadhar_card' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'pan_card' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            
        ]);

        // Handle file upload
        $customExpCertifictPath = 'uploads/experience_certificate';
        $customHeightPath = 'uploads/highest_qualification';
        $customAadharPath = 'uploads/aadhar';
        $customPanPath = 'uploads/pan';

        // Handle file upload
        if ($request->hasFile('exp_certificate')) {
            $file = $request->file('exp_certificate');
            $extension = $file->getClientOriginalExtension(); // Get file extension
            $uniqueName = 'exp_nurse_' . Str::random(12) . '.' . $extension; // Generate unique file name
            $filePathexp = $file->storeAs($customExpCertifictPath, $uniqueName, 'public');
        }
        if ($request->hasFile('highest_qualification')) {
            $file = $request->file('highest_qualification');
            $extension = $file->getClientOriginalExtension(); // Get file extension
            $uniqueName = 'exp_quali_' . Str::random(12) . '.' . $extension; // Generate unique file name
            $filePathhighest = $file->storeAs($customHeightPath, $uniqueName, 'public');
        }
        if ($request->hasFile('aadhar_card')) {
            $file = $request->file('aadhar_card');
            $extension = $file->getClientOriginalExtension(); // Get file extension
            $uniqueName = 'exp_aadhar_' . Str::random(12) . '.' . $extension; // Generate unique file name
            $filePathaadhar = $file->storeAs($customAadharPath, $uniqueName, 'public');
        }
        if ($request->hasFile('pan_card')) {
            $file = $request->file('pan_card');
            $extension = $file->getClientOriginalExtension(); // Get file extension
            $uniqueName = 'exp_pan_' . Str::random(12) . '.' . $extension; // Generate unique file name
            $filePathpan = $file->storeAs($customPanPath, $uniqueName, 'public');
        }
        // Insert data into the database
        DB::table('nurse_master')->insert([
            'f_name' => $request->input('f-name'),
            'l_name' => $request->input('l_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'service_stared' => $request->input('service_stared'),
            'exp_year' => $request->input('exp_year'),
            'exp_certificate' => $filePathexp,
            'highest_qualification' => $filePathhighest,
            'aadhar_card' => $filePathaadhar,
            'pan_card' => $filePathpan,
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'pincode' => $request->input('pincode'),
            'nurse_status' => 1, // Default status
            'status' => 1,       // Default status
            'del_status' => 1,   // Default status
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Nurse details saved successfully!');
    }
}
