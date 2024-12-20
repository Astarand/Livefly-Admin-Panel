<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{   
    
    public function Login(){
        return view('login');
    }
    public function index(){
        return view('login');
    }

    public function loginCheck(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => 'required|email',
            'password' => 'required|string'
        ]);

        
        $admin = DB::table('admin')->where('username', $credentials['username'])->first();
        
        
        if ((!empty($admin) && $credentials['password'] == $admin->password)) {

            Session::put('user_id', $admin->id);
            Session::put('username', $admin->username);

            return redirect()->route('index')->with('success', 'Login successful!');
        }

        return redirect()->route('login')->with('error', 'Invalid login credentials.');
    }

    public function logout()
    {
        
        Session::flush();

        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }


    
}
