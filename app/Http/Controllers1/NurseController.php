<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function NewNurse(){
        return view('nurse.new-nurse');
    }
    public function Nurse(){
        return view('nurse.nurse');
    }
    public function AddNurse(){
        return view('nurse.add-nurse');
    }
}
