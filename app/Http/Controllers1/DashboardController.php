<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function Dashboard(){
        return view('index');
    }

    
}
