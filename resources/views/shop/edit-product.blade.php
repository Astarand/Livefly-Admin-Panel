@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>Edit Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        
                            <!-- Basic Details -->
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Product Name <span class="text-danger"> *</span></label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" value="{{ $product->product_name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Selling Price <span class="text-danger"> *</span></label>
                                            <input type="text" name="selling_price" class="form-control" placeholder="Enter Selling Price" value="{{ $product->selling_price }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Type <span class="text-danger"> *</span></label>
                                            <select class="form-select" name="product_type">
                                                <option value="" disabled>Select an Option</option>
                                                <option value="buy" {{ $product->product_type == 'buy' ? 'selected' : '' }}>Buy</option>
                                                <option value="rent" {{ $product->product_type == 'rent' ? 'selected' : '' }}>Rent</option>
                                                <option value="both" {{ $product->product_type == 'both' ? 'selected' : '' }}>Both</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Product Description -->
                            <div class="form-group-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-block mb-3">
                                            <label>Product Description</label>
                                            <textarea class="summernote form-control" name="product_description" rows="4">{{ $product->product_description }}</textarea>
                                        </div>
                                    </div>
                                    <!-- Product Images -->
                                    <div class="col-lg-6">
                                        <div class="input-block mb-3">
                                            <label>Product Images</label>
                                            <input type="file" name="product_img[]" multiple>
                                            <div class="mt-3">
                                                @foreach(explode(',', $product->product_image) as $image)
                                                    <img src="{{ asset('storage/'.$image) }}" alt="Product Image" style="width: 100px; height: 100px; margin: 5px;">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Check if there's a success message
    window.onload = function() {
        var successMessage = document.getElementById('successMessage');
        
        if(successMessage) {
            // Hide the success message after 5 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }
    };
</script>
@endsection