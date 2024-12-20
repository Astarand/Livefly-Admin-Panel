@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>View Customer</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="#">
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <?php 
                                //     echo '<pre>';
                                //     print_r($customer);
                                // ?>
                                
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Patients Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Name" value="{{ $customer->fname ?? '' }} {{ $customer->lname ?? '' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Contact Person Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Name" value="{{ $customer->fname ?? '' }} {{ $customer->lname ?? '' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Enter Email Address" value="{{ $customer->email ?? '' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="name" value="{{ $customer->phone_no ?? '' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select" name="service" disabled>
                                                    <option value="" disabled>Select Services</option>
                                                    <option value="Critical Care Nursing" {{ $customer->service === 'Critical Care Nursing' ? 'selected' : '' }}>Critical Care Nursing</option>
                                                    <option value="ICU Nursing Care" {{ $customer->service === 'ICU Nursing Care' ? 'selected' : '' }}>ICU Nursing Care</option>
                                                    <option value="Advance Care Nursing" {{ $customer->service === 'Advance Care Nursing' ? 'selected' : '' }}>Advance Care Nursing</option>
                                                    <option value="Basic Care Nursing" {{ $customer->service === 'Basic Care Nursing' ? 'selected' : '' }}>Basic Care Nursing</option>
                                                    <option value="Clinical Attendant/Bedside Attendant" {{ $customer->service === 'Clinical Attendant/Bedside Attendant' ? 'selected' : '' }}>Clinical Attendant/Bedside Attendant</option>
                                                    <option value="Short term Nursing" {{ $customer->service === 'Short term Nursing' ? 'selected' : '' }}>Short term Nursing</option>
                                                    <option value="Telemedicine" {{ $customer->service === 'Telemedicine' ? 'selected' : '' }}>Telemedicine</option>
                                                    <option value="Palliative care/Hospice Care" {{ $customer->service === 'Palliative care/Hospice Care' ? 'selected' : '' }}>Palliative care/Hospice Care</option>
                                                    <option value="Senior citizen care" {{ $customer->service === 'Senior citizen care' ? 'selected' : '' }}>Senior citizen care</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Required from <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Service Request Duration" value="{{ $customer->service_request_for ?? '' }}" disabled>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Type<span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Equipments" name="service_type" value="{{ $customer->service ?? '' }}">
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Equipment Required<span class="text-danger">*</span></label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Equipments" name="equipment" value="{{ $customer->equipmentString ?? '' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Message</label>
                                            <textarea type="text" class="form-control" placeholder="Enter Message" disabled>{{ $customer->apt_message ?? '' }}</textarea>
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
                                                <input type="text" class="form-control" placeholder="Enter Address 1" value="{{ $customer->address1 ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" placeholder="Enter Address 2" value="{{ $customer->address2 ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Enter Country" value="{{ $customer->country ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="Enter City" value="{{ $customer->city ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>State</label>
                                                <input type="text" class="form-control" placeholder="Enter State" value="{{ $customer->state ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <div class="input-block mb-3">
                                                <label>Pincode</label>
                                                <input type="text" class="form-control" placeholder="Enter Pincode" value="{{ $customer->pincode ?? '' }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="add-customer-btns text-end">
                                <a href="{{ route('customer') }}" class="btn customer-btn-cancel">Cancel</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection