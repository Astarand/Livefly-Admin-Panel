<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SessionTestController extends Controller
{
    public function NewsessionTest()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $customers = DB::table('appointments')
                    ->where('del_status', 1)
                    ->where('session_test', 1)
                    ->where('verified_status', 0)
                    ->get();

        
        return view('session-test.new-test', compact('customers'));
        
    }

    public function SessionTest()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $customers = DB::table('appointments')
                    ->where('del_status', 1)
                    ->where('session_test', 1)
                    ->where('verified_status', 1)
                    ->get();

        // echo '<pre>';
        // print_r($customers);
        // die();

        return view('session-test.session-test', compact('customers'));
    }
    public function AddSessionTest()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        return view('session-test.add-session-test');
    }
    public function moveToSessionCustomer($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        DB::table('appointments')
            ->where('id', $id)
            ->update(['verified_status' => 1]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer Move successfully!');
    }
    public function AddSessionCustomer(Request $request)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        // Insert into the database
        DB::table('appointments')->insert([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('phone_no'),
            'service' => $request->input('service'),
            'apt_date' => $request->input('service_required_on'),
            'apt_message' => $request->input('apt_message'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'pincode' => $request->input('pincode'),
            'verified_status' => '1',
            'session_test' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Appointment added successfully!');
    }

    public function ViewSessionCustomer($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $customer = DB::table('appointments')
                    ->where('id', $id)
                    ->first();

        // echo '<pre>';
        // print_r($customers);
        // die();

        return view('session-test.view-session-test', compact('customer'));
    }

    public function DeleteSessionCustomer($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        DB::table('appointments')
            ->where('id', $id)
            ->update(['del_status' => 0]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer Delete successfully!');
    }
    public function WorkUpdateSessionCustomer($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        DB::table('appointments')
            ->where('id', $id)
            ->update(['work_status' => 0]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Customer Work Update successfully!');
    }

}
