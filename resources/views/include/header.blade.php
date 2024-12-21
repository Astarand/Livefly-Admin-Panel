<header class="site-header">
    <div class="pre-header">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-center">
                    <ul class="nav pbmit-contact-info justify-content-center justify-content-md-start">
                        <li class="nav-item me-3"><i class="pbmit-base-icon-marker me-2 pbmit-color-global"></i>47, Roy Mallick Colony, 2nd Floor, Dum Dum Road Kolkata -700030,West Bengal, India</li>
                        <li class="nav-item me-3"><i class="pbmit-base-icon-contact pbmit-color-global me-2"></i>contact@liveflyhealthcare.com</li>
                        <li class="nav-item me-3"><i class="pbmit-base-icon-call pbmit-color-global me-2"></i>033-46041975</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <ul class="nav pbmit-link">
                        <li class="nav-item text-decoration-underline"><a href="{{ route('nurse') }}">Register as a Nurse?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="site-header-menu">
        <div class="pbmit-header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="megamenu-wrap">
                            <div class="d-flex align-items-center">
                                <div class="site-branding">
                                    <a href="{{ route('index') }}">
                                        <img class="logo-img" alt="Doctery" src="{{ asset('assets/images/logo.png') }}" />
                                    </a>
                                </div>
                                <div class="site-navigation ms-auto">
                                    <nav class="main-menu navbar-expand-xl navbar-light">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <i class="pbmit-base-icon-menu-1"></i>
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li><a href="{{ route('index') }}">Home</a></li>
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li class="dropdown megamenu"><a href="#">Services</a>
                                                    <ul>
                                                        <li><a href="{{ route('nursing-care') }}">Nursing Care</a>
                                                            <ul>
                                                                <li><a href="{{ route('critical-care') }}">Critical Care Nursing</a></li>
                                                                <li><a href="{{ route('icu-nursing') }}">ICU Nursing Care</a></li>
                                                                <li><a href="{{ route('advance-care') }}">Advance Care Nursing</a></li>
                                                                <li><a href="{{ route('basic-care') }}">Basic Care Nursing</a></li>
                                                                <li><a href="{{ route('clinical-attendant') }}">Clinical Attendant/Bedside Attendant</a></li>
                                                                <li><a href="{{ route('short-term') }}">Short term Nursing</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="{{ route('rehabilitation-therapies') }}">Rehabilitation Therapies</a>
                                                            <ul>
                                                                <li><a href="{{ route('physiotherapy') }}">Physiotherapy</a></li>
                                                                <li><a href="{{ route('s-therapy') }}">Speech & Swallow therapy</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="{{ route('health-tests') }}">Health Tests</a>
                                                            <ul>
                                                                <li><a href="{{ route('polysomnography') }}">Polysomnography Test (PSG)</a></li>
                                                                <li><a href="{{ route('abg') }}">Arterial blood gas analysis (ABG)</a></li>
                                                                <li><a href="{{ route('avpm') }}">Ambulatory BP monitoring (AVPM)</a></li>
                                                                <li><a href="{{ route('x-ray') }}">Portable X-ray</a></li>
                                                                <li><a href="{{ route('holter') }}">Holter</a></li>
                                                                <li><a href="{{ route('sample-collection') }}">Sample collection</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Miscellaneous</a>
                                                            <ul>
                                                                <li><a href="{{ route('telemedicine') }}">Telemedicine</a></li>
                                                                <li><a href="{{ route('hospice') }}">Palliative care/Hospice Care</a></li>
                                                                <li><a href="{{ route('senior-care') }}">Senior citizen care</a></li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- <li><a href="{{ route('differntiators') }}">Our Key Differntiators</a></li> -->
                                                <!-- <li><a href="{{ route('gallery') }}">Gallery</a></li> -->
                                                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="menu-right-box d-flex align-items-center  ms-auto">
                                    <a href="#" class="search-btn"><i class="Doctery-icon-search-1"></i></a>
                                    <div class="header-button">
                                        <a href="{{ route('appointment') }}" class="pbmit-btn"><i class="pbmit-base-icon-appointment me-1"></i> Emergency Appointment?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>