<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog()
    {
        return view('blogs.blog');
    }

    public function AddBlog()
    {
        return view('blogs.add-blog');
    }
}
