<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('index');
    }

    public function About(){
        return view('about');
    }

    public function Differntiators(){
        return view('differntiators');
    }

    public function Gallery(){
        return view('gallery');
    }

    public function Testimonial(){
        return view('testimonial');
    }

    public function Contact(){
        return view('contact');
    }
    public function Appointment(){
        return view('appointment');
    }
    public function Nurse(){
        return view('nurse');
    }
}
