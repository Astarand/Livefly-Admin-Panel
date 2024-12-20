<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function Blog()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $blogs = DB::table('blog_master')
                    // ->where('status', 0)
                    ->get();

        return view('blogs.blog', compact('blogs'));
    }
    public function AddBlog()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        return view('blogs.add-blog');
    }

    public function edit_blog($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $blog = DB::table('blog_master')
                    ->where('status', 0)
                    ->where('id', $id)
                    ->first();
        // print_r($blog);
        // die();
        return view('blogs.edit-blog', compact('blog'));
    }
    

    public function storeBlog(Request $request)
    {
        // Validate inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'header_img' => 'nullable|array',
            'header_img.*' => 'image|max:51200', // Max size 50MB per image
        ]);

        // Handle image uploads
        $images = [];
        if ($request->hasFile('header_img')) {
            foreach ($request->file('header_img') as $image) {
                $images[] = $image->store('uploads/blog_images', 'public');
            }
        }

        // Insert data into the database
        DB::table('blog_master')->insert([
            'title' => $request->input('title'),
            'content' => $request->input('message'),
            'images' => json_encode($images),
            'status' => 0, // Default active
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Blog added successfully!');
    }

    public function activate($id)
    {
        DB::table('blog_master')->where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('success', 'Blog activated successfully!');
    }

    public function deactivate($id)
    {
        DB::table('blog_master')->where('id', $id)->update(['status' => 1]);
        return redirect()->back()->with('success', 'Blog deactivated successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required',
            'header_img' => 'array',
            'header_img.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);

        $blog = DB::table('blog_master')->where('id', $id)->first();

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        // Handle images
        $imagePaths = json_decode($blog->images, true) ?? [];
        if ($request->hasFile('header_img')) {
            foreach ($request->file('header_img') as $image) {
                $path = $image->store('uploads/blog_images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Update the blog
        DB::table('blog_master')->where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('message'),
            'images' => json_encode($imagePaths),
            'updated_at' => now(),
        ]);

        return redirect()->route('blog.edit', $id)->with('success', 'Blog updated successfully.');
    }
    
}
