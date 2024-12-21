@extends('include.app')

@section('title', 'Contact Us - Livefly Healthcare | Get in Touch for Home Healthcare Services')
@section('meta_description', 'Reach out to Livefly Healthcare for any inquiries or to learn more about our personalized home healthcare services, including nursing care, physiotherapy, and health tests.')
@section('keywords', 'Livefly Healthcare contact, contact home healthcare services, nursing care contact, physiotherapy contact, health tests inquiry, Kolkata healthcare contact')


@section('content')

<!-- page content -->
<div class="page-content">

    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title">Contact Us</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                            <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                            <span><span class="post-root post post-post current-item">Contact Us</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-lgt contact-section">
        <div class="container">
            <div class="pbmit-heading-subheading text-center">
                <h4 class="pbmit-subtitle">Get in touch </h4>
                <h2 class="pbmit-title mb-3"> Call now or write a message</h2>
            </div>
            <div class="row g-0">
                <div class="col-md-4 col-sm-12">
                    <div class="pbmit-ihbox-style-8">
                        <div class="pbmit-ihbox-box">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-doctery-icon pbmit-doctery-icon-map"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title"> Our Location</h2>
                                <div class="pbmit-heading-desc">47, Roy Mallick Colony, 2nd Floor<br /> Dum Dum Road, Kolkata -700030</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="pbmit-ihbox-style-8">
                        <div class="pbmit-ihbox-box">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-doctery-icon pbmit-doctery-icon-phone-call"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title"> Phone Number (24*7)</h2>
                                <div class="pbmit-heading-desc">033-46041975<br>+91-9147069761</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="pbmit-ihbox-style-8">
                        <div class="pbmit-ihbox-box">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-doctery-icon pbmit-doctery-icon-email"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title"> Email Address</h2>
                                <div class="pbmit-heading-desc">contact@liveflyhealthcare.com<br>info@liveflyhealthcare.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pbmit-bg-color-light section-lg contact-section-bg">
        <div class="container ">
            <div class="row g-3 g-lg-5">
                <div class="col-lg-8 col-sm-12">
                    <div class="pbmit-heading-subheading text-left">
                        <h4 class="pbmit-subtitle">Livefly</h4>
                        <h2 class="pbmit-title">Get in touch with us</h2>
                        <p>Connect with us to know more about us</p>
                    </div>
                    <form method="POST" action="{{ route('contact-form.store') }}" id="contact-form" novalidate="novalidate">
                        @csrf
                        <div class="row mb-3 g-3">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" name="f_name" value="{{ old('f_name') }}" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="l_name" value="{{ old('l_name') }}" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone" name="phone_number" value="{{ old('phone_number') }}" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-select" name="department" required>
                                    <option value="" disabled {{ old('department') ? '' : 'selected' }}>Select Services</option>
                                    <option value="1" {{ old('department') == 1 ? 'selected' : '' }}>Critical Care Nursing</option>
                                    <option value="2" {{ old('department') == 2 ? 'selected' : '' }}>ICU Nursing Care</option>
                                    <option value="3" {{ old('department') == 3 ? 'selected' : '' }}>Advance Care Nursing</option>
                                    <!-- Continue with other options... -->
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{ old('subject') }}" required>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <textarea class="form-control" name="message" rows="4" placeholder="Message" required>{{ old('message') }}</textarea>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <button type="submit" class="pbmit-btn">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    SEND MESSAGE
                                </button>
                            </div>
                            <div class="col-md-12 col-lg-12 message-status">
                                <!-- Success or error message placeholder -->
                                @if(session('success'))
                                <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger" id="error-message">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    // Hide success or error message after 5 seconds
                                    setTimeout(function() {
                                        $('#success-message').fadeOut();
                                        $('#error-message').fadeOut();
                                    }, 5000);
                                });
                            </script>

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
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center contact-border-top">
                                <i class="pbmit-doctery-icon pbmit-doctery-icon-headphones"></i>
                                <div class="single-service-contents">
                                    Emergency Cases
                                    <h2>033-46041975</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <iframe height="0" width="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.922598550359!2d88.38982008537373!3d22.619365378305595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89dc76a841dfb%3A0x23e9c300dd15dc25!2sLIVEFLY%20HEALTH%20CARE!5e0!3m2!1sen!2sin!4v1722972273856!5m2!1sen!2sin" title="Livefly, Dumdum, West Bengal" aria-label="Livefly, Dumdum, West Bengal"></iframe>
    </section>
</div>

// <script>
    //     $(document).ready(function () {
    //         $('#contact-form').on('submit', function (e) {
    //             e.preventDefault();

    //             let formData = $(this).serialize();
    //             $.ajax({
    //                 url: $(this).attr('action'),
    //                 type: 'POST',
    //                 data: formData,
    //                 success: function (response) {
    //                     $('.message-status').html('<div class="alert alert-success">Message sent successfully!</div>');
    //                     $('#contact-form')[0].reset();
    //                 },
    //                 error: function (xhr) {
    //                     let errors = xhr.responseJSON.errors;
    //                     let errorHtml = '<div class="alert alert-danger"><ul>';
    //                     for (let key in errors) {
    //                         errorHtml += `<li>${errors[key][0]}</li>`;
    //                     }
    //                     errorHtml += '</ul></div>';
    //                     $('.message-status').html(errorHtml);
    //                 }
    //             });
    //         });
    //     });

    //
</script>

@endsection