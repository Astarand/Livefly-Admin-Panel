<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function Quries()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $shop_queries = DB::table('shop_queries')
                    // ->where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();

        return view('shop.quries', compact('shop_queries'));
    }

    public function Update()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        $products = DB::table('products')
                    ->where('status', 0)
                    ->orderBy('id', 'desc')
                    ->get();

        // echo '<pre>';
        // print_r($products);
        // die();
        return view('shop.update', compact('products'));
    }

    public function AddProduct()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
        return view('shop.add-product');
    }
    public function ViewQuries()
    {
        return view('shop.view-quries');
    }
    

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'product_name' => 'required|string|max:255',
            'selling_price' => 'required|numeric',
            'product_type' => 'required|string',
            'product_img.*' => 'nullable|image|mimes:jpg,png,jpeg|max:51200', // 50MB max size
        ]);

        // Handle image upload
        
        $customPath = 'uploads/product_img';
        $imagePaths = [];
        if ($request->hasFile('product_img')) {
            $imagePaths = [];
            foreach ($request->file('product_img') as $file) {
                $extension = $file->getClientOriginalExtension(); // Get file extension
                $uniqueName = 'product_' . Str::random(12) . '.' . $extension; // Generate unique file name
                $imagePaths[] = $file->storeAs( $customPath, $uniqueName); // Store file in custom path
            }
        }

        // Save product data to the database
        DB::table('products')->insert([
            'product_name' => $request->input('product_name'),
            'selling_price' => $request->input('selling_price'),
            'product_type' => $request->input('product_type'),
            'product_description' => $request->input('product_description'),
            'product_image' => implode(',', $imagePaths),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function editProduct($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }
    
        $product = DB::table('products')
            ->where('status', 0)
            ->where('id', $id)
            ->first();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found or is inactive.');
        }
    
        return view('shop.edit-product', compact('product'));
    }

    
    public function updateProduct(Request $request, $id)
    {
        // Validate inputs
        $request->validate([
            'product_name' => 'required|string|max:255',
            'selling_price' => 'required|numeric',
            'product_type' => 'required|in:buy,rent,both',
            'product_description' => 'nullable|string',
            'product_img.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120', // Max 5MB per image
        ]);

        // Fetch existing product data
        $product = DB::table('products')->where('id', $id)->first();

        if (!$product) {
            return redirect()->back()->withErrors('Product not found.');
        }

        // Prepare data for update
        $data = [
            'product_name' => $request->product_name,
            'selling_price' => $request->selling_price,
            'product_type' => $request->product_type,
            'product_description' => $request->product_description,
            'updated_at' => now(),
        ];

        // Handle image upload
        if ($request->hasFile('product_img')) {
            // Delete old images if necessary
            if ($product->product_image) {
                foreach (explode(',', $product->product_image) as $oldImage) {
                    if (Storage::exists($oldImage)) {
                        Storage::delete($oldImage);
                    }
                }
            }

            // Upload new images
            $imagePaths = [];
            foreach ($request->file('product_img') as $file) {
                $imagePaths[] = $file->store('uploads/product_img', 'public');
            }

            // Update image data
            $data['product_image'] = implode(',', $imagePaths);
        }

        // Update the product record
        DB::table('products')->where('id', $id)->update($data);

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    public function deleteProduct($id)
    {   
        
        $product = DB::table('products')->where('id', $id)->first();

        if (!$product) {
            return redirect()->back()->withErrors('Product not found.');
        }

        
        $updated = DB::table('products')
            ->where('id', $id)
            ->update(['status' => 0, 'updated_at' => now()]);

        if ($updated) {
            
            // Redirect with a success message if the update was successful
            return redirect()->back()->with('success', 'Product status updated successfully.');
        } else {
            
            // Redirect with an error message if the update failed
            return redirect()->back()->withErrors('Failed to update product status. Please try again.');
        }
    }
    public function showShopQueries($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Please log in to access the dashboard.');
        }

        $product_details = DB::table('shop_queries')
                    ->join('products', 'products.id', '=', 'shop_queries.product_id')
                    ->where('shop_queries.id', $id)
                    ->select(
                        'shop_queries.*', // Select all columns from shop_queries
                        'products.product_name', // Fetch specific fields from products
                        'products.selling_price',
                        'products.product_image',
                        'products.product_type',
                    )
                    ->first();

        return view('shop.view-qurie-details', compact('product_details'));

    }

    public function rejectProduct($id)
    {
        $updated = DB::table('shop_queries')
            ->where('id', $id)
            ->update(['status' => 1]); // 1 for rejected

        if ($updated) {
            return redirect()->back()->with('success', 'Product query rejected successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to reject product query.');
        }
    }

    // Confirm Product
    public function confirmProduct($id)
    {
        $updated = DB::table('shop_queries')
            ->where('id', $id)
            ->update(['status' => 2]); // 2 for confirmed

        if ($updated) {
            return redirect()->back()->with('success', 'Product query confirmed successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to confirm product query.');
        }
    }
}
