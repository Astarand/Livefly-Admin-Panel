<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Nurse;
use App\Models\ShopRequest;
use App\Models\JobApplication;
use Illuminate\Support\Facades\DB;


class APIAppointmentController extends Controller
{
    
    public function AppointmentsStore(Request $request)
    {
        try {
            // Create a new appointment without validation
            $appointment = Appointment::create([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'phone_no' => $request->input('phone_no'),
                'email' => $request->input('email'),
                'service' => $request->input('service'),
                'session_test' => $request->input('session_test'),
                'service_request_for' => $request->input('service_request_for') ?: null,
            ]);
        
            if ($appointment) {
                return response()->json([
                    'success' => true,
                    'message' => 'Appointment created successfully!',
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save appointment.',
                ], 500);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the appointment.',
                'error' => $e->getMessage(),
            ], 500);
        }
        
    }

    public function NurseRegistration(Request $request)
    {
        try {
            // Validate incoming data
            $request->validate([
                'f_name' => 'required|string|max:255',
                'l_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:15',
                'exp_year' => 'required|integer|min:0',
                'address1' => 'required|string|max:255',
                'address2' => 'nullable|string|max:255',
                'city' => 'required|string|max:255',
                'pincode' => 'required|string|max:10',
                'exp_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'highest_qualification' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'aadhar_card' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'pan_card' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            ]);

            // Handle file uploads
            $basePath = 'public/uploads'; // Define a base path for better organization

            // Store Experience Certificate
            $exp_certificate_path = $request->file('exp_certificate')->storeAs(
                "$basePath/experience_certificate", // Combine base path with specific folder
                uniqid('exp_nurse_') . '.' . $request->file('exp_certificate')->getClientOriginalExtension(),
                'public' // Use public disk for accessible storage
            );

            // Store Highest Qualification Document
            $highest_qualification_path = $request->file('highest_qualification')->storeAs(
                "$basePath/highest_qualification", // Combine base path with specific folder
                uniqid('qual_nurse_') . '.' . $request->file('highest_qualification')->getClientOriginalExtension(),
                'public'
            );

            // Store Aadhar Card
            $aadhar_card_path = $request->file('aadhar_card')->storeAs(
                "$basePath/aadhar", // Combine base path with specific folder
                uniqid('aadhar_nurse_') . '.' . $request->file('aadhar_card')->getClientOriginalExtension(),
                'public'
            );

            // Store PAN Card
            $pan_card_path = $request->file('pan_card')->storeAs(
                "$basePath/pan", // Combine base path with specific folder
                uniqid('pan_nurse_') . '.' . $request->file('pan_card')->getClientOriginalExtension(),
                'public'
            );


            // Save data in the database
            Nurse::create([
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'exp_year' => $request->exp_year,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'exp_certificate' => $exp_certificate_path,
                'highest_qualification' => $highest_qualification_path,
                'aadhar_card' => $aadhar_card_path,
                'pan_card' => $pan_card_path,
            ]);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Nurse registered successfully!',
            ], 201);

        } catch (\Exception $e) {
            // Log the error for debugging purposes (optional)
            \Log::error('Nurse Registration Error: ' . $e->getMessage());

            // Return failure response
            return response()->json([
                'success' => false,
                'message' => 'Nurse registration failed. Please try again.',
            ], 500);
        }
    }

    public function emergency_appointment(Request $request)
    {
        try {
            // Create a new appointment without validation
            $appointment = Appointment::create([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'phone_no' => $request->input('phone_no'),
                'email' => $request->input('email'),

                'address1' => $request->input('address1'),
                'address2' => $request->input('address2'),
                'city' => $request->input('city'),
                'pincode' => $request->input('pincode'),
                'patient_name' => $request->input('patient_name'),
                'service' => $request->input('service'),
                'patient_condition' => $request->input('patient_condition'),
                'apt_date' => $request->input('apt_date'),
                'apt_time' => $request->input('apt_time'),
                'apt_message' => $request->input('apt_message'),
                'equipmentString' => $request->input('equipmentString'),

                'session_test' => $request->input('session_test'),
                
            ]);
        
            if ($appointment) {
                return response()->json([
                    'success' => true,
                    'message' => 'Appointment created successfully!',
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save appointment.',
                ], 500);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the appointment.',
                'error' => $e->getMessage(),
            ], 500);
        }
        
    }

    public function applied_job(Request $request)
    {
        try {
            // Validate incoming data
            $request->validate([
                'applied_job_id' => 'string',
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_no' => 'required|string|max:15',
                'apply_for' => 'required|string',
                'exp_year' => 'required',
                'address1' => 'required|string|max:255',
                'address2' => 'nullable|string|max:255',
                'city' => 'required|string|max:255',
                'pincode' => 'required|string|max:10',
                'cv' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                
            ]);

            // Handle file uploads
            $basePath = 'public/uploads'; // Define a base path for better organization

            // Store Experience Certificate
            $cv_path = $request->file('cv')->storeAs(
                "$basePath/cv", 
                uniqid('cv_') . '.' . $request->file('cv')->getClientOriginalExtension(),
                'public' 
            );

            


            // Save data in the database
            JobApplication::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone_no' => $request->phone_no,
                'apply_for' => $request->apply_for,
                'exp_year' => $request->exp_year,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'applied_job_id' => $request->applied_job_id,

                'cv_path' => $cv_path,
                
            ]);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Job Applied successfully!',
            ], 201);

        } catch (\Exception $e) {
            // Log the error for debugging purposes (optional)
            \Log::error('Error: ' . $e->getMessage());

            // Return failure response
            return response()->json([
                'success' => false,
                'message' => 'Job Applied failed. Please try again.'.$e->getMessage(),
            ], 500);
        }
    }

    public function blogs()
    {
        // Fetch the required fields from the blog_master table
        $blogs = DB::table('blog_master')
            ->select('id', 'title', 'images', 'created_at') // Specify only the required fields
            ->where('status', 0) // Optional: Add a condition to fetch only active blogs
            ->orderBy('created_at', 'desc') // Optional: Order by creation date
            ->get();

        // Add the full URL path for images
        $blogs = $blogs->map(function ($blog) {
            // Decode the JSON string of images
            $images = json_decode($blog->images);
            
            // Add the full path to each image
            $images = array_map(function ($image) {
                return asset('storage/' . $image); // Assuming your images are stored in the storage folder
            }, $images);
            
            // Update the blog image field with the full path
            $blog->images = $images;

            return $blog;
        });

        // Return the blogs as a JSON response
        return response()->json([
            'success' => true,
            'data' => $blogs,
            'message' => 'Blogs retrieved successfully.'
        ], 200);
    }


    public function blog_details($id)
    {
        // Fetch the blog details by ID
        $blog = DB::table('blog_master')
            ->select('id', 'title', 'content', 'images', 'created_at')
            ->where('id', $id)
            ->where('status', 0) 
            ->first();

        // Check if the blog exists
        if (!$blog) {
            return response()->json([
                'success' => false,
                'message' => 'Blog not found.'
            ], 404);
        }

        // Process images to include full URL
        $images = json_decode($blog->images); // Assuming images are stored as a JSON string

        if ($images) {
            // Add full URL to each image
            $images = array_map(function ($image) {
                return asset('storage/' . $image); // Generate full URL for the image
            }, $images);
        }

        // Update the blog with the full URLs for images
        $blog->images = $images;

        // Return the blog details as a JSON response
        return response()->json([
            'success' => true,
            'data' => $blog,
            'message' => 'Blog details retrieved successfully.'
        ], 200);
    }


    public function career_list()
    {
        // Fetch the required fields from the blog_master table
        $blogs = DB::table('career_master')
            ->select('id', 'title', 'location', 'salary', 'description','status') // Specify only the required fields
            ->where('status', 0) // Optional: Add a condition to fetch only active blogs
            ->orderBy('id', 'desc') // Optional: Order by creation date
            ->get();

        
        return response()->json([
            'success' => true,
            'data' => $blogs,
            'message' => 'Job retrieved successfully.'
        ], 200);
    }

    public function shop_list()
    {
        // Fetch the required fields from the products table
        $blogs = DB::table('products')
            ->select('id', 'product_name', 'selling_price', 'product_type', 'product_description', 'product_image')
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->get();

        // Add the full URL path for product_image
        $blogs->map(function ($blog) {
            // Assuming the images are stored in the 'storage' folder and are publicly accessible
            $blog->product_image = asset('storage/' . $blog->product_image);
            return $blog;
        });

        return response()->json([
            'success' => true,
            'data' => $blogs,
            'message' => 'Shop retrieved successfully.'
        ], 200);
    }
    
    public function shop_now(Request $request)
    {
        try {
            // Save data to ShopRequest model
            $shopRequest = ShopRequest::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'product_id' => $request->input('product_id'),
                'product_name' => $request->input('product_name'),
                'quantity' => $request->input('quantity'),
                'product_type' => $request->input('product_type'),
                'queries_no' => now()->format('Y-m-d'),
                'address1' => $request->input('address1'),
                'address2' => $request->input('address2') ?: null,
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'pincode' => $request->input('pincode'),
                'message' => $request->input('message'),
            ]);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Shop request created successfully!',
                
            ], 201);
        } catch (\Exception $e) {
            // Handle errors
            return response()->json([
                'success' => false,
                'message' => 'Failed to save shop request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }




}
