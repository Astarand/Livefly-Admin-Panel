<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function NewCustomer(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $customers = DB::table('appointments')
                    ->where('del_status', 1)
                    ->where('verified_status', 0)
                    ->get();

        // print_r($customer);
        // die();
        
        return view('customer.new-customer', compact('customers'));
    }
    public function Customer(){

        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $customers = DB::table('appointments')
                    ->where('del_status', 1)
                    ->where('verified_status', 1)
                    ->where('session_test', 1)
                    ->get();
        // print_r($customers);
        // die();
        return view('customer.customer', compact('customers'));
    }
    public function AddCustomer(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        return view('customer.add-customer');
    }

    public function rejectCustomer($id)
    {
        DB::table('appointments')
        ->where('id', $id)
        ->update(['del_status' => 2]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer Reject successfully!');
    }

    public function deleteCustomer($id)
    {
        DB::table('appointments')
        ->where('id', $id)
        ->update(['del_status' => 0]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer Delete Successfully!');
    }
    public function moveToCustomer($id)
    {
        DB::table('appointments')
        ->where('id', $id)
        ->update(['verified_status' => 1]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer Move successfully!');
    }
    public function viewCustomer($id){

        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $customer = DB::table('appointments')
                    ->where('del_status', 1)
                    ->where('id', $id)
                    ->where('verified_status', 1)
                    ->first();
        // print_r($customers);
        // die();
        return view('customer.view-customer', compact('customer'));
    }

    public function editCustomer($id){

        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $customer = DB::table('appointments')
                    ->where('del_status', 1)
                    ->where('id', $id)
                    ->where('verified_status', 1)
                    ->first();
        // print_r($customers);
        // die();
        return view('customer.edit-customer', compact('customer'));
    }
   

    public function store(Request $request)
    {
        // Insert data directly into the 'appointments' table
        DB::table('appointments')->insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'service' => $request->service,
            'service_request_for' => $request->service_request_for,
            'apt_date' => $request->apt_date,
            'apt_message' => $request->apt_message,
            'equipmentString' => $request->equipmentString,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'pincode' => $request->pincode,
            'verified_status' => 1, // Default value
            'del_status' => 1, // Default value
            'work_status' => 1, // Default value
            'session_test' => 0, // Default value
            'created_at' => now(), // Add timestamps
            'updated_at' => now()
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Appointment saved successfully!');
    }

    public function updateCustomer(Request $request)
    {
        // Validate the request
        $request->validate([
            'id' => 'required', // Ensure id exists in the database
            'patient_name' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_no' => 'required|string|max:15',
            'service' => 'required|string|max:255',
            'service_request_for' => 'nullable|string|max:255',
            'equipmentString' => 'nullable|string|max:255',
            'apt_message' => 'nullable|string',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:20',
        ]);

        // Update the customer record
        DB::table('appointments')
            ->where('id', $request->id)
            ->update([
                'patient_name' => $request->patient_name,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone_no' => $request->phone_no,
                'service' => $request->service,
                'service_request_for' => $request->service_request_for,
                'equipmentString' => $request->equipmentString,
                'apt_message' => $request->apt_message,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'country' => $request->country,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,
                'updated_at' => now(), 
            ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer updated successfully!');
    }



}
