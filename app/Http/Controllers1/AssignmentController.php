<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function Assignment(){
        return view('assignment.assignment');
    }

    public function AddService(){
        return view('assignment.add-service');
    }
}
