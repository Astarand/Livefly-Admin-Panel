<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function Terms()
    {
        return view('others.terms');
    }

    public function Privacy()
    {
        return view('others.privacy');
    }

    public function FAQ()
    {
        return view('others.faq');
    }

    public function Career()
    {
        return view('others.career');
    }
}
