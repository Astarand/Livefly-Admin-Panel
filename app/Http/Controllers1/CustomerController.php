<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function NewCustomer(){
        return view('customer.new-customer');
    }
    public function Customer(){
        return view('customer.customer');
    }
    public function AddCustomer(){
        return view('customer.add-customer');
    }
}
