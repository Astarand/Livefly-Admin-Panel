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
                    <div class="content-page-header">
                        <h5>Add Career</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('career.store') }}" method="POST">
                            @csrf
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Career Title <span class="text-danger"> *</span></label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Job Title" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Location <span class="text-danger"> *</span></label>
                                            <input type="text" name="location" class="form-control" placeholder="Enter Location" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Salary <span class="text-danger"> *</span></label>
                                            <input type="text" name="salary" class="form-control" placeholder="Enter Salary" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-item">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 description-box">
                                        <div class="input-block mb-3" id="summernote_container">
                                            <label class="form-control-label">Career Description</label>
                                            <textarea class="summernote form-control" name="description" placeholder="Type your message" rows="8" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button type="reset" class="btn btn-primary cancel me-2">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Add Career
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 5000); // Hide after 5 seconds
</script>
@endsection