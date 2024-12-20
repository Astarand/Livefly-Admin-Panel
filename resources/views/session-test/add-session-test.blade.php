<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    @if (session('success'))
                        <div class="alert alert-success" id="success-message">
                            {{ session('success') }}
                        </div>
                    @endif

                    

                    <div class="content-page-header">
                        <h5>Add a new session test</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('appointments.store') }}" method="POST">
                            @csrf
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>First name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="fname" placeholder="Enter first Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Last name <span class="text-danger">*</span></label>
                                            <input type="text" name="lname" class="form-control" placeholder="Enter last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone_no">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select" name="service">
                                                    <option>Select Services</option>
                                                    <option value="Physiotherapy">Physiotherapy</option>
                                                    <option value="Speech & Swallow therapy">Speech & Swallow therapy</option>
                                                    <option value="Polysomnography test (PSG)">Polysomnography test (PSG)</option>
                                                    <option value="Arterial blood gas analysis (ABG)">Arterial blood gas analysis (ABG)</option>
                                                    <option value="Ambulatory BP monitoring (AVPM)">Ambulatory BP monitoring (AVPM)</option>
                                                    <option value="Portable X-ray">Portable X-ray</option>
                                                    <option value="Holter">Holter</option>
                                                    <option value="Sample collection">Sample collection</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required on <span class="text-danger">*</span></label>
                                            <input type="date" name="service_required_on" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Message</label>
                                            <textarea type="text" class="form-control" name="apt_message" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-item">
                                <h5 class="form-title">Address</h5>
                                <div class="row align-items-end">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" name="address1" placeholder="Enter Address 1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" name="address2" placeholder="Enter Address 2">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="country" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>State</label>
                                                <input type="text" class="form-control" name="state" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Pincode</label>
                                                <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-customer-btns text-end">
                                <a href="customers.html" class="btn customer-btn-cancel">Cancel</a>
                                <button type="submit" class="btn customer-btn-save">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Hide the success message after 5 seconds
    setTimeout(() => {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 5000); // 5000ms = 5 seconds
</script>

@endsection