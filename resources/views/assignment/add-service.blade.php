@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="page-header">
                    @if(session('success'))
                        <div id="success-message" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="content-page-header">
                        <h5>Add a new Service</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('save.service') }}" method="POST">
                            @csrf
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Customer Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select" name="customer_id" required>
                                                    <option value="">Select Customer</option>
                                                    @foreach($customers as $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->fname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Nurse Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select" name="nurse_id" required>
                                                    <option value="">Select Nurse</option>
                                                    @foreach($nurses as $nurse)
                                                        <option value="{{ $nurse->id }}">{{ $nurse->f_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Provide<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="form-select" name="service">
                                                    <option>Select Services</option>
                                                    <option value="Critical Care Nursing">Critical Care Nursing</option>
                                                    <option value="ICU Nursing Care">ICU Nursing Care</option>
                                                    <option value="Advance Care Nursing">Advance Care Nursing</option>
                                                    <option value="Basic Care Nursing">Basic Care Nursing</option>
                                                    <option value="Clinical Attendant/Bedside Attendant">Clinical Attendant/Bedside Attendant</option>
                                                    <option value="Short term Nursing">Short term Nursing</option>
                                                    <option value="Physiotherapy">Physiotherapy</option>
                                                    <option value="Speech & Swallow therapy">Speech & Swallow therapy</option>
                                                    <option value="Polysomnography test (PSG)">Polysomnography test (PSG)</option>
                                                    <option value="Arterial blood gas analysis (ABG)">Arterial blood gas analysis (ABG)</option>
                                                    <option value="Ambulatory BP monitoring (AVPM)">Ambulatory BP monitoring (AVPM)</option>
                                                    <option value="Portable X-ray">Portable X-ray</option>
                                                    <option value="Holter">Holter</option>
                                                    <option value="Telemedicine">Telemedicine</option>
                                                    <option value="Palliative care/Hospice Care">Palliative care/Hospice Care</option>
                                                    <option value="Senior citizen care">Senior citizen care</option>
                                                    <option value="Sample collection">Sample collection</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service Stared from <span class="text-danger">*</span></label>
                                            <input type="date" name="service_start_date" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Service End on <span class="text-danger">*</span></label>
                                            <input type="date" name="service_end_date" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Equepment Provided<span class="text-danger">*</span></label>
                                            <textarea type="text" name="equepment_provided" class="form-control" placeholder="Equepment Provided"></textarea>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="form-group-item">
                            <h5 class="form-title">Service Provide Address</h5>
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
    // Hide the success message after 5 seconds
    setTimeout(function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 5000); // 5000 milliseconds = 5 seconds
</script>

@endsection