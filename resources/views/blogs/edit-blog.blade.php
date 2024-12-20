@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    @if(session('success'))
                        <div class="alert alert-success" id="success-message">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" id="error-message">
                            {{ session('error') }}
                        </div>
                    @endif



                    <div class="content-page-header">
                        <h5>Edit Blog</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('update.blog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Blog Title <span class="text-danger"> *</span></label>
                                            <!-- Set the title value -->
                                            <input type="text" name="title" class="form-control" placeholder="Enter Blog Title"
                                                value="{{ $blog->title ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 description-box">
                                        <div class="input-block mb-3" id="summernote_container">
                                            <label class="form-control-label">Blog Content</label>
                                            <!-- Set the content value -->
                                            <textarea class="summernote form-control" name="message" placeholder="Type your message"
                                                rows="8">{{ $blog->content ?? '' }}</textarea>
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
                                                <input type="file" multiple="" name="header_img[]" id="image_sign">
                                                <div id="frames">
                                                    <!-- Display existing images -->
                                                    @if(!empty($blog->images))
                                                        @foreach(json_decode($blog->images, true) as $image)
                                                            <img src="{{ asset('storage/uploads/blog_images/' . basename($image)) }}" 
                                                                 alt="Blog Image" 
                                                                 style="width: 100px; height: auto; margin-right: 10px;">
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button type="reset" class="btn btn-primary cancel me-2">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Update Blog
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Hide success message after 5 seconds
    setTimeout(() => {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }

        const errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000); // 5000ms = 5 seconds
</script>
@endsection