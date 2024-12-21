@extends('include.app')

@section('title', 'Nurse Registration - Join Livefly Healthcare | Empowering Caregivers')
@section('meta_description', 'Register as a nurse with Livefly Healthcare and become part of a compassionate team delivering quality home healthcare services. Join us today and make a difference.')
@section('keywords', 'nurse registration, join Livefly Healthcare, nurse jobs, healthcare team registration, nursing careers, home healthcare jobs, Kolkata nursing opportunities')


@section('content')

<!-- page content -->
<div class="page-content">
    <section class="pbmit-bg-color-light section-lg contact-section-bg" style="padding-top:140px;">
        <div class="container ">
            <div class="row g-3 g-lg-5">
                <div class="col-lg-8 col-sm-12">
                    <div class="pbmit-heading-subheading text-left">
                        <h2 class="pbmit-title">Join with us</h2>
                        <p>After you Submit your Data. We will get back to you within 24 Hours<span class="text-danger">*</span></p>
                        @if(session('success'))
                        <div class="alert alert-success" id="success-message">
                            {{ session('success') }}
                        </div>
                        @endif



                    </div>
                    <form method="post" id="contact-form" action="{{ route('nurse.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 g-3">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="First Name*" name="f_name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name*" name="l_name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Email" name="email" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone*" name="phone_number" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Years of Exprience*" name="exp_year" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Address Line 1*" name="address1" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Address Line 2*" name="address2" required="">
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <input type="text" class="form-control" placeholder="City*" name="city" required="">
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <input type="text" class="form-control" placeholder="Pincode*" name="pincode" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="exp_certificate" class="form-label">Upload your Experience Certificate<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="exp_certificate" name="exp_certificate">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="highest_qualification" class="form-label">Upload your Highest Qualification Certificate<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="highest_qualification" name="highest_qualification">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="aadhar_card" class="form-label">Upload your Aadhar Card<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="aadhar_card" name="aadhar_card">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="pan_card" class="form-label">Upload your PAN Card<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="pan_card" name="pan_card">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <button type="submit" class="pbmit-btn">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    Submit
                                </button>
                            </div>
                            <div class="col-md-12 col-lg-12 message-status"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-contact home2-Emergency-Cases-section-bg">
                        <div class="single-service-contact-last">
                            <h2 class="pbmit-element-title text-white mb-5">Schedule Hours</h2>
                            <div class="widget mb-5">
                                <ul class="pbmit-timelist-list Emergency-timelist-list">
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Monday</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Tuesday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Wednesday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Thursday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Friday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Saturday</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Sunday</span>
                                        <span class="pbmit-timelist-li-value text-white">Closed*</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center contact-border-top">
                                <i class="pbmit-doctery-icon pbmit-doctery-icon-headphones"></i>
                                <div class="single-service-contents">
                                    Call Now
                                    <h2>+91-9147069761</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    // Wait for the document to load
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the success message is displayed
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            // Set a timeout to hide the message after 5 seconds (5000 milliseconds)
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }
    });
</script>
@endsection