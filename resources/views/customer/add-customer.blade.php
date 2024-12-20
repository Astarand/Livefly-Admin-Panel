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
                        <h5>Add a new Customer</h5>
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
                                            <label>Contact Person First Name <span class="text-danger">*</span></label>
                                            <input type="text" name="fname" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Contact Person Last name <span class="text-danger">*</span></label>
                                            <input type="text" name="lname" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                     <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Patient Full Name <span class="text-danger">*</span></label>
                                            <input type="text" name="fname" class="form-control" placeholder="Enter Name">
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
                                            <input type="text" id="mobile_code" name="phone_no" class="form-control" placeholder="Phone Number" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select" name="service">
                                                    <option>Select Services</option>
                                                    <option value="Critical Care Nursing">Critical Care Nursing</option>
                                                    <option value="ICU Nursing Care">ICU Nursing Care</option>
                                                    <option value="Advance Care Nursing">Advance Care Nursing</option>
                                                    <option value="Basic Care Nursing">Basic Care Nursing</option>
                                                    <option value="Clinical Attendant/Bedside Attendant">Clinical Attendant/Bedside Attendant</option>
                                                    <option value="Short term Nursing">Short term Nursing</option>
                                                    <option value="Telemedicine">Telemedicine</option>
                                                    <option value="Palliative care/Hospice Care">Palliative care/Hospice Care</option>
                                                    <option value="Senior citizen care">Senior citizen care</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required from <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="apt_date" placeholder="Enter Date">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Type<span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" name="service_request_for" class="form-control" placeholder="Equipments" >
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Equepment Required<span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" name="equipmentString" placeholder="Equipments" >
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
                                                <input type="text" name="address1" class="form-control" placeholder="Enter Address 1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Address Line 2</label>
                                                <input type="text" name="address2" class="form-control" placeholder="Enter Address 2">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Country</label>
                                                <input type="text" name="country" class="form-control" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>State</label>
                                                <input type="text" name="state" class="form-control" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Pincode</label>
                                                <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-customer-btns text-end">
                                <a href="customers.html" class="btn customer-btn-cancel">Cancel</a>
                                <button type="submit"  class="btn customer-btn-save">Save Changes</button>
                            </div>
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