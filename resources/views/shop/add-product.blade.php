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
                        <h5>Add Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Product Name <span class="text-danger"> *</span></label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Selling Price <span class="text-danger"> *</span></label>
                                            <input type="text" name="selling_price" class="form-control" placeholder="Enter Selling Price">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Type <span class="text-danger"> *</span></label>
                                            <select class="form-select" name="product_type">
                                                <option value="" disabled selected>Select an Option</option>
                                                <option value="buy">Buy</option>
                                                <option value="rent">Rent</option>
                                                <option value="both">Both</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 description-box">
                                        <div class="input-block mb-3" id="summernote_container">
                                            <label class="form-control-label">Product Descriptions</label>
                                            <textarea class="summernote form-control" name="product_description" placeholder="Type your message" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="input-block mb-3">
                                            <label>Product Image</label>
                                            <div class="input-block mb-3 service-upload mb-0">
                                                <span><img src="assets/img/icons/drop-icon.svg" alt="upload"></span>
                                                <h6 class="drop-browse align-center">
                                                    Drop your files here or<span class="text-primary ms-1">browse</span>
                                                </h6>
                                                <p class="text-muted">Maximum size: 5MB</p>
                                                <p class="text-muted">Image Orientaion: 200x200</p>
                                                <input type="file" name="product_img[]" multiple="" id="image_sign">
                                                <div id="frames"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button type="reset" class="btn btn-primary cancel me-2 text-end">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary text-end">
                                Add Product
                            </button>
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