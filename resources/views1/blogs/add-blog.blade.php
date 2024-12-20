@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>Add Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group-item">
                            <h5 class="form-title">Basic Details</h5>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Blog Title <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Product Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-item">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 description-box">
                                    <div class="input-block mb-3" id="summernote_container">
                                        <label class="form-control-label">Blog Content</label>
                                        <textarea class="summernote form-control" placeholder="Type your message" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="input-block mb-3">
                                        <label>Blog Image</label>
                                        <div class="input-block mb-3 service-upload mb-0">
                                            <span><img src="assets/img/icons/drop-icon.svg" alt="upload"></span>
                                            <h6 class="drop-browse align-center">
                                                Drop your files here or<span class="text-primary ms-1">browse</span>
                                            </h6>
                                            <p class="text-muted">Maximum size: 50MB</p>
                                            <input type="file" multiple="" id="image_sign">
                                            <div id="frames"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="product-list.html" class="text-end">
                            <button type="reset" class="btn btn-primary cancel me-2">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Add Blog
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection