<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog(){
        return view('blog.blog');
    }
    public function BlogDetails($id){
        $blog_id = $id;

        return view('blog.blog-details', compact('blog_id') );
        // return view('blog.blog-details');
    }
}
