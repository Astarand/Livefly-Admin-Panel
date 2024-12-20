<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class DashboardController extends Controller
{   
    public function __construct()
    {
        // Apply auth middleware to the Dashboard method
        //$this->middleware('auth')->only('Dashboard');
        
        
    }
    // public function Login(){
    //     return view('login');
    // }

    public function Dashboard(){
        if (!Session::has('user_id')) {
            return redirect('/login');
        }
        return view('index');
    }

    
}
