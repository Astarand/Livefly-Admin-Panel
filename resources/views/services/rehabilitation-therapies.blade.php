@extends('include.app')

@section('title', 'Rehabilitation Therapies - Livefly Healthcare | Personalized Recovery Solutions')
@section('meta_description', 'Accelerate your recovery with Livefly Healthcare’s expert rehabilitation therapies. Comprehensive physiotherapy and therapeutic solutions tailored to your needs at home.')
@section('keywords', 'Rehabilitation therapies, home rehabilitation, physiotherapy, therapeutic services, recovery solutions, Livefly Healthcare, Kolkata healthcare services')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Rehabilitation Therapies</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">Rehabilitation Therapies</span></span>
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
                <div class="col-sm-12 col-md-6">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-07.jpg') }}" class="img-fluid" alt="service 1">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-pimples"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Physiotherapy</h3>
                                    <div class="pbmit-service-content">
                                        <p>Physiotherapy improves mobility and functioning through individually tailored exercises, manual therapy, and other rehabilitative techniques, promoting recovery and general health.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('physiotherapy') }}">
                                            <span class="pbmit-btn-text">Explore More</span>
                                            <i class="pbmit-base-icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-12 col-md-6">
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-icon-overlay">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/services/service-08.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Speech & Swallow therapy</h3>
                                    <div class="pbmit-service-content">
                                        <p>Speech & Swallow Therapy provides individualized exercises and techniques to maximize communication and swallowing skills, thereby enhancing the patient's quality of life and safety.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('s-therapy') }}">
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