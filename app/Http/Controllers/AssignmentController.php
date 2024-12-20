<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Career;
use Illuminate\Support\Facades\Session;

class AssignmentController extends Controller
{
    public function Assignment(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $services = DB::table('service_master')
                    
                    ->join('nurse_master', 'nurse_master.id', '=', 'service_master.nurse_id')
                    ->join('appointments', 'appointments.id', '=', 'service_master.customer_id')
                    ->select(
                        'service_master.*', 
                        'nurse_master.f_name as nurse_fname', 
                        'nurse_master.l_name as nurse_lname', 
                        'appointments.fname as customer_fname', 
                        'appointments.lname as customer_lname'
                    )
                    ->where('service_master.del_status', 0)
                    ->orderBy('service_master.created_at', 'desc')
                    
                    ->get();

        // echo '<pre>';
        // print_r($services);
        // die();
        return view('assignment.assignment', compact('services'));
    }

    public function AddService(){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $nurses = DB::table('nurse_master')
                    ->where('nurse_status', 1)
                    ->where('status', 1)
                    ->get();
        $customers = DB::table('appointments')
                    ->where('verified_status', 1)
                    ->where('del_status', 1)
                    ->where('work_status', 1)
                    ->get();

        return view('assignment.add-service', compact('nurses', 'customers'));
    }

    public function serviceStore(Request $request)
    {
        // echo '<pre>';
        // print_r($request);
        // die();
        // Create a new service entry
        DB::table('service_master')->insert([
            'customer_id' => $request->customer_id,
            'nurse_id' => $request->nurse_id,
            'service_name' => $request->service,
            'service_start_date' => $request->service_start_date,
            'service_end_date' => $request->service_end_date,
            'equepment_provided' => $request->equepment_provided,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'status' => 0, // Default status is active
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('nurse_master')
            ->where('id', $request->nurse_id)
            ->update(['status' => 2]);

        DB::table('appointments')
            ->where('id', $request->customer_id)
            ->update(['work_status' => 2]);

        // Optionally, you can return a success message or redirect
        return redirect()->back()->with('success', 'Service saved successfully!');
    }

    public function serviceView($id){
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $service = DB::table('service_master')
                    ->where('id', $id)
                    ->join('nurse_master', 'nurse_master.id', '=', 'service_master.nurse_id')
                    ->join('appointments', 'appointments.id', '=', 'service_master.customer_id')
                    ->select(
                        'service_master.*', 
                        'nurse_master.f_name as nurse_fname', 
                        'nurse_master.l_name as nurse_lname', 
                        'appointments.fname as customer_fname', 
                        'appointments.lname as customer_lname'
                    )
                    ->orderBy('service_master.created_at', 'desc')
                    ->first();

        $nurses = DB::table('nurse_master')
                    ->where('nurse_status', 1)
                    ->get();
        $customers = DB::table('appointments')
                    ->where('verified_status', 1)
                    ->where('del_status', 1)
                    ->get();

        return view('assignment.view-service', compact('nurses', 'customers', 'service'));
    }

    public function serviceDeactivate($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $service = DB::table('service_master')->where('id', $id)->first();

        if ($service) {
            // Update 'service_master' table to set 'del_status' to 1
            DB::table('service_master')
                ->where('id', $id)
                ->update(['del_status' => 1]);
    
            // Update 'appointments' table to set 'work_status' to 1
            DB::table('appointments')
                ->where('id', $service->customer_id)
                ->update(['work_status' => 1]);
    
            // Update 'nurse_master' table to set 'status' to 1
            DB::table('nurse_master')
                ->where('id', $service->nurse_id)
                ->update(['status' => 1]);
    
            return redirect('/service-details')->with('success', 'Deactivated Successfully');
        } else {
            return redirect('/service-details')->with('error', 'Service not found.');
        }
    }

    public function serviceCompleted($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $service = DB::table('service_master')->where('id', $id)->first();


        if ($service) {
            // Update 'service_master' table to set 'del_status' to 1
            DB::table('service_master')
                ->where('id', $id)
                ->update(['status' => 1]);
    
            // Update 'appointments' table to set 'work_status' to 1
            DB::table('appointments')
                ->where('id', $service->customer_id)
                ->update(['work_status' => 1]);
    
            // Update 'nurse_master' table to set 'status' to 1
            DB::table('nurse_master')
                ->where('id', $service->nurse_id)
                ->update(['status' => 1]);
    
            return redirect('/service-details')->with('success', 'Service Completed');
        } else {
            return redirect('/service-details')->with('error', 'Service not found.');
        }
    }

}
