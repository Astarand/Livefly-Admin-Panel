@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>Oder Details</h5>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                        <h2 class="mb-4 text-center">Query Details</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered shadow-sm">
                                <tbody>
                                    <!-- Personal Details -->
                                    <tr class="table-primary">
                                        <th colspan="2" class="text-center">Personal Details</th>
                                    </tr>
                                    <tr>
                                        <th class="w-25">Name</th>
                                        <td>{{ $product_details->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $product_details->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $product_details->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address 1</th>
                                        <td>{{ $product_details->address1 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address 2</th>
                                        <td>{{ $product_details->address2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{ $product_details->city }}</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>{{ $product_details->state }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pincode</th>
                                        <td>{{ $product_details->pincode }}</td>
                                    </tr>

                                    <!-- Product Details -->
                                    <tr class="table-success">
                                        <th colspan="2" class="text-center">Product Details</th>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>{{ $product_details->product_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>${{ number_format($product_details->selling_price, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th>
                                        <td>{{ $product_details->quantity }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Price</th>
                                        <td>
                                            ${{ number_format($product_details->quantity * $product_details->selling_price, 2) }}
                                        </td>
                                    </tr>

                                    <!-- Product Images -->
                                    <tr class="table-warning">
                                        <th colspan="2" class="text-center">Product Images</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <div class="product-images">
                                                @if(!empty($product_details->product_image))
                                                    @php
                                                        $images = explode(',', $product_details->product_image);
                                                    @endphp
                                                    @foreach($images as $image)
                                                        <img src="{{ asset('storage/' . $image) }}" 
                                                            alt="{{ $product_details->product_name }}" 
                                                            style="width: 150px; height: auto; margin: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.3);">
                                                    @endforeach
                                                @else
                                                    <p class="text-muted">No images available.</p>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection