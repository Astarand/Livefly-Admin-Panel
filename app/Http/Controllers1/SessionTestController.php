<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionTestController extends Controller
{
    public function NewsessionTest()
    {
        return view('session-test.new-test');
    }

    public function SessionTest()
    {
        return view('session-test.session-test');
    }
    public function AddSessionTest()
    {
        return view('session-test.add-session-test');
    }
}
