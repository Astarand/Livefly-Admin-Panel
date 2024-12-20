@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>Add a new Customer</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="#">
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select">
                                                    <option>Select Services</option>
                                                    <option value="1">Critical Care Nursing</option>
                                                    <option value="2">ICU Nursing Care</option>
                                                    <option value="3">Advance Care Nursing</option>
                                                    <option value="4">Basic Care Nursing</option>
                                                    <option value="5">Clinical Attendant/Bedside Attendant</option>
                                                    <option value="6">Short term Nursing</option>
                                                    <option value="7">Telemedicine</option>
                                                    <option value="8">Palliative care/Hospice Care</option>
                                                    <option value="9">Senior citizen care</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required from <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Type<span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Equipments" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Equepment Required<span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Equipments" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Message</label>
                                            <textarea type="text" class="form-control" placeholder="Enter Message"></textarea>
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
                                                <input type="text" class="form-control" placeholder="Enter Address 1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" placeholder="Enter Address 2">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>State</label>
                                                <input type="text" class="form-control" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Pincode</label>
                                                <input type="text" class="form-control" placeholder="Enter Pincode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-customer-btns text-end">
                                <a href="customers.html" class="btn customer-btn-cancel">Cancel</a>
                                <a href="customers.html" class="btn customer-btn-save">Save Changes</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection