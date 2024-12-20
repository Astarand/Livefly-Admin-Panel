<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Career;

class CareerController extends Controller
{
    public function Career()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $careers = DB::table('career_master')
                    // ->where('status', 0)
                    ->get();

        // print_r($careers);
        // die();
        return view('career.career-list', compact('careers'));
    }

    public function AddCareer()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        return view('career.add-career');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Insert data into the career_master table
        Career::create([
            'title' => $request->input('title'),
            'location' => $request->input('location'),
            'salary' => $request->input('salary'),
            'description' => $request->input('description'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Career added successfully!');
    }

    public function careerEdit($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $career = DB::table('career_master')
                    ->where('id', $id)
                    ->first();

        // print_r($career);
        // die();
        return view('career.edit-career', compact('career'));
    }

    public function update(Request $request, $id)
    {
        // Fetch the career from the database
        $career = Career::findOrFail($id);

        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'description' => 'required|string',
        ]);

        // Update the career data
        $career->update($request->all());

        // Redirect back with a success message
        return redirect('/career-details')->with('success', 'Career updated successfully!');
    }

    public function career_deactive($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        DB::table('career_master')
            ->where('id', $id)
            ->update(['status' => 1]);


        return redirect('/career-details')->with('success', 'Deactive Successfully');
    }
    public function career_active($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        DB::table('career_master')
            ->where('id', $id)
            ->update(['status' => 0]);


        return redirect('/career-details')->with('success', 'Active Successfully');
    }

    public function CandidateList(){
        return view('career.candidate-list');
    }

}
