@extends('include.app')
@section('title', 'About Us - Livefly Healthcare | Dedicated to Quality Home Healthcare')
@section('meta_description', 'Learn more about Livefly Healthcare, our mission, values, and commitment to providing personalized home healthcare services, including nursing care, health tests, and rehabilitation therapies.')
@section('keywords', 'Livefly Healthcare, about Livefly Healthcare, home healthcare services, personalized care, nursing care, health tests, physiotherapy, Kolkata healthcare')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper" >
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">About Us</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">About Us</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<div class="page-content">

    <!-- About Start -->
    <section class="home-3-about-bottom-section about-02">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-md-5 pb-md-5">
                    <div class="home-3-about-wrap">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">About us</h4>
                            <h2 class="pbmit-title"> Caring for our Patients</h2>
                        </div>
                        <p>we at Livefly, bringing in tailor made professional and innovative home healthcare services, available 24/7 at your doorstep. We understand the importance of care needed by people with chronic conditions or disabilities and we aim to provide the best care for our patients. Our team of skilled professionals are available at your service and care at your convenience and need.</p>
                        <div class="mb-5 pt-3">
                            <h3>We have a 5+ Years of Experience and the best facilities in Homecare Services.</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="pbmit-ihbox pbmit-ihbox-style-7">
                        <div class="pbmit-ihbox-contents">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                    <img src="{{ asset('assets/images/icon-7.png') }}" alt="Welcome to our site" />
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 200 200">
                                <defs>
                                    <path d="M0, 100a100, 100 0 1, 0 200, 0a100, 100 0 1, 0 -200, 0" id="txt-path"></path>
                                </defs>
                                <text>
                                    <textPath startOffset="0" xlink:href="#txt-path">
                                        Livefly Healthcare---Livefly Healthcare---
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                    </div>
                    <div class="main-img">
                        <img src="{{ asset('assets/images/img-12.jpg') }}" class="img-fuild" alt="" />
                    </div>
                    <div class="overlep-img">
                        <img src="{{ asset('assets/images/img-13.jpg') }}" class="img-fuild" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- What we do Start -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 clinic-colum">
                </div>
                <div class="col-lg-6 clinic-bg-color position-relative">
                    <div class="home-2-video-bg">
                        <a href="https://www.youtube.com/watch?v=0sObxyt9TAk" class="home-2-video-btn pbmin-lightbox-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="clinic-content">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">What we do</h4>
                            <h2 class="pbmit-title text-white">We are committed to provide individualized home care with a compassionate touch</h2>
                        </div>
                        <p class="text-white pe-4">With personalized service packages to total patient care, our team provides the necessary support that is highly responsive and well-communicated. Our models offer both care and safety features, while offering remote supervision and cutting edge responses to continue a path of support at any phase needed.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item text-white">
                                        <i class="pbmit-doctery-icon-approved-signal"></i> Team’s hands-on experience
                                    </li>
                                    <li class="list-group-item text-white">
                                        <i class="pbmit-doctery-icon-approved-signal"></i> Strong on-field resource presence
                                    </li>
                                    <li class="list-group-item text-white">
                                        <i class="pbmit-doctery-icon-approved-signal"></i> Tailored and customized packages
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item text-white">
                                        <i class="pbmit-doctery-icon-approved-signal"></i> Skilled nurses in remote areas
                                    </li>
                                    <li class="list-group-item text-white">
                                        <i class="pbmit-doctery-icon-approved-signal"></i> Personal touch experience
                                    </li>
                                    <li class="list-group-item text-white">
                                        <i class="pbmit-doctery-icon-approved-signal"></i> Balanced & experienced team
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What we do End -->

    <!-- Welcome -->
    <section class="section mb-4">
        <div class="container">
            <div class="pbmit-heading-subheading text-left mb-5">
                <h4 class="pbmit-subtitle">Our Journey</h4>
                <h2 class="pbmit-title">How We Started Livefly</h2>
            </div>
            <div class="row">
                <div class="col-2 ourhistory-left">
                    <h3>2021</h3>
                </div>
                <div class="col-10 ourhistory-right">
                    <h3 class="d-block d-md-none">2021</h3>
                    <h4>We Started Our Journey</h4>
                    <div class="mb-4">In June 2021, a vision was born – Livefly Health Care, now proudly known as Cureastra Private Limited, embarked on its journey with a single-minded mission: to redefine and elevate the standards of home healthcare. Fuelled by a commitment to deliver exceptional patient care, we aimed to create a healthcare experience where quality, compassion, and expertise converge at the doorstep of every patient.</div>
                </div>

                <div class="col-2 ourhistory-left">
                    <h3>2022</h3>
                </div>
                <div class="col-10 ourhistory-right">
                    <h3 class="d-block d-md-none">2022</h3>
                    <h4>Expand Our Services</h4>
                    <div class="mb-4">From the outset, our team committed to offering comprehensive services tailored to each patient's unique needs, including ICU care, critical and basic nursing support, and specialized therapy. As we pushed forward, our unyielding dedication did not go unnoticed. In 2022, just a year after inception, Livefly received a prestigious accolade: we were honoured as one of the Top 10 Healthcare Start-ups by Silicon India. This recognition strengthened our resolve and reassured us that we were on the right path.</div>
                </div>

                <div class="col-2 ourhistory-left">
                    <h3>2023</h3>
                </div>
                <div class="col-10 ourhistory-right">
                    <h3 class="d-block d-md-none">2023</h3>
                    <h4>Recognized by MSME</h4>
                    <div class="mb-4">By 2023, our hard work and relentless pursuit of excellence continued to gain traction, leading to yet another achievement. This time, MSME India recognized us as the Best Start-up Home Healthcare Brand, a testament to our ever-evolving dedication to patient welfare and quality service.</div>
                </div>

                <div class="col-2 ourhistory-left">
                    <h3>2024</h3>
                </div>
                <div class="col-10 ourhistory-right">
                    <h3 class="d-block d-md-none">2024</h3>
                    <h4>Leading Service in West Bengal</h4>
                    <div class="mb-4">Fast-forward to 2024, and our journey has been nothing short of remarkable. In a span of just three years, Cureastra Private Limited has touched the lives of over 10,000 patients across West Bengal. This growth is not merely a number but a reflection of the trust placed in us by our patients, families, and communities. Our clinical team’s commitment, unwavering support, and ability to deliver care during critical times have been the pillars of this success.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome End -->
    <section class="team-02-section bg-white">
        <div class="container py-5">
            <!-- Section Heading -->
            <div class="row justify-content-between align-items-center mb-4">
                <div class="col-md-12 text-center">
                    <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle text-uppercase text-primary">Meet Our Team</h4>
                    <h2 class="pbmit-title font-weight-bold">Group of Certified & Experienced Professionals</h2>
                    </div>
                    <p>Discover our team of dedicated professionals who are committed to providing the best services and ensuring your satisfaction. Their expertise and experience make a difference.</p>
                </div>
            </div>
            <!-- Team Members -->
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team1.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title mb-1">Mr. Soumalya Chakravorty</h4>
                            <h6 class="card-text text-mute">Executive Director<br> <span style="font-style: italic; font-weight: normal; font-size:12px;">MBA (HR & IR)</span></h6>
                            <p class="card-text text-mute mb-2" style="font-size:14px;">12 Yrs+ extensive experience into building Home Heathcare business and operating solutions. Expertise in Organizational development & Team building.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team2.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                        <h4 class="card-title mb-1">Ms. Priyanjali Ghosh</h4>
                            <h6 class="card-text text-mute">Director <br><span style="font-style: italic; font-weight: normal; font-size:12px;">B.Pharma</span></h6>
                            <p class="card-text text-mute mb-4 pb-2" style="font-size:14px;">4 Yrs+ extensive experience into Home Healthcare Marketing & PR. A driven young entrepreneur in Home Healthcare.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team3.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                        <h4 class="card-title mb-1">Dr. Uttiya Deb</h4>
                            <h6 class="card-text text-mute">Chief Medical Advisor <br><span style="font-style: italic; font-weight: normal; font-size:12px;">MBBS, MD (Gold Medalist)</span></h6>
                            <p class="card-text text-mute mb-2 pb-3">10 Yrs+ extensive experience into Critical & Geriatric Care. Ex- Medical Advisor of Johnson & Johnson</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team4.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                        <h4 class="card-title mb-1">CA Shivam Kumar Bajaj</h4>
                            <h6 class="card-text text-mute">Chief Finance Officer(Virtual) <br><span style="font-style: italic; font-weight: normal; font-size:12px;">ACA, B.com (H)</span></h6>
                            <p class="card-text text-mute mb-2 pb-3">Expertise in Startup Strategy & Financial Management.Dynamic Mentor for empowering startups</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team5.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mrs. Arpita Saha</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Chief Legal Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team6.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mr. Tamojit Lodh</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Digital Marketing & IT Consultant</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team7.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mr. Chandan Auddy</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Administrative Head</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team8.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mr. Debojit Saha</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Sales & Marketing Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team9.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mr. Subhash Chowdhury</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Supply Chain & Logistics Head</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team10.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mrs. Madhumita Sarkar</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Clinical Operating Head</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom mb-4">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/images/team/team11.png') }}" class="card-img-top" alt="Team Member">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Ms. Nikita Mallick</h5>
                            <p class="card-text text-muted" style="font-size:12px;">Patient Relationship Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection