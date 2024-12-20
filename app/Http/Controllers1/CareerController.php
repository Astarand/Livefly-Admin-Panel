<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function Career()
    {
        return view('career.career-list');
    }

    public function AddCareer()
    {
        return view('career.add-career');
    }
}
