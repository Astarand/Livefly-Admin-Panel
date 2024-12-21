@extends('include.app')

@section('title', 'Polysomnography Test (PSG) - Livefly Healthcare | Sleep Study at Home')
@section('meta_description', 'Get accurate Polysomnography (PSG) tests at home with Livefly Healthcare. Diagnose sleep disorders like apnea and improve your sleep health with professional care.')
@section('keywords', 'Polysomnography test, PSG test, sleep study at home, sleep disorder diagnosis, home healthcare services, Livefly Healthcare PSG, sleep apnea test, Kolkata healthcare services')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Polysomnography test (PSG)</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">Polysomnography test (PSG)</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content services-grid">
    <!-- Blog Grid -->
    <section class="section-lgx">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-09.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Polysomnography test (PSG)</h3>
                                    <div class="pbmit-service-content">
                                        <p>The polysomnography test is conducted by observing the brain's activity, breathing, and body movements while one is asleep. It, therefore, diagnoses sleep disorders efficiently and effectively.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('polysomnography') }}">
                                            <span class="pbmit-btn-text">Explore More</span>
                                            <i class="pbmit-base-icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-12 col-md-4">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-10.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Arterial blood gas analysis (ABG)</h3>
                                    <div class="pbmit-service-content">
                                        <p>ABG measures the concentration of oxygen, concentration of carbon dioxide, and acidity in the blood hence an assessment of respiratory and metabolic function of the body.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('abg') }}">
                                            <span class="pbmit-btn-text">Explore More</span>
                                            <i class="pbmit-base-icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-12 col-md-4">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-11.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Ambulatory BP monitoring(AVPM)</h3>
                                    <div class="pbmit-service-content">
                                        <p>On the other hand, ambulatory blood pressure monitoring reads blood pressure over a 24-hour period to give an overview of how it fluctuates and diagnose hypertension.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('avpm') }}">
                                            <span class="pbmit-btn-text">Explore More</span>
                                            <i class="pbmit-base-icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-12.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Portable X-ray</h3>
                                    <div class="pbmit-service-content">
                                        <p>Portable X-ray provides convenience by imaging the patient at their location. Imaging at the patient's bedside eliminates the transport hassles to the radiology facilitis.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('x-ray') }}">
                                            <span class="pbmit-btn-text">Explore More</span>
                                            <i class="pbmit-base-icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-12 col-md-4">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-13.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Holter</h3>
                                    <div class="pbmit-service-content">
                                        <p>Holter monitoring basically involves the continuous recording of the activities of the heart for 24-48 hours, thereby indicating irregularities and showing, in detail, the cardiac functions.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('holter') }}">
                                            <span class="pbmit-btn-text">Explore More</span>
                                            <i class="pbmit-base-icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Grid End -->
</div>
<!-- Page Content End -->

@endsection