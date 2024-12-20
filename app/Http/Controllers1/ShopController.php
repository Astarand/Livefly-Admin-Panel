<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function Quries()
    {
        return view('shop.quries');
    }

    public function Update()
    {
        return view('shop.update');
    }

    public function AddProduct()
    {
        return view('shop.add-product');
    }
}
