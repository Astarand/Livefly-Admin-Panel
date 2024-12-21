@extends('include.app')

@section('title', 'Nursing Care - Livefly Healthcare | Professional Home Nursing Services')
@section('meta_description', 'Livefly Healthcare offers professional nursing care services at home. From basic to critical care, our skilled nurses ensure personalized and compassionate healthcare support.')
@section('keywords', 'Nursing care, home nursing services, professional nursing care, Livefly Healthcare, basic nursing, critical care nursing, Kolkata home healthcare')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Nursing Care</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">Nursing Care</span></span>
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
                                    <img src="{{ asset('assets/images/services/service-01.jpg') }}" class="img-fluid" alt="service 1">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-pimples"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Critical Care Nursing</h3>
                                    <div class="pbmit-service-content">
                                        <p>Critical care nursing is provided to patients who are in life-threatening conditions by specially trained staff through continuous monitoring and the latest forms of treatment.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('critical-care') }}">
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
                                    <img src="{{ asset('assets/images/services/service-02.jpg') }}" class="img-fluid" alt="service 2">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-blood-transfusion"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">ICU Nursing Care</h3>
                                    <div class="pbmit-service-content">
                                        <p>ICU Nursing Care often involves intensive monitoring, skilled intervention, and comprehensive support for the critically ill patients in a very specialized environment.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('icu-nursing') }}">
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
                                    <img src="{{ asset('assets/images/services/service-03.jpg') }}" class="img-fluid" alt="service 3">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-angiography"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Advance Care Nursing</h3>
                                    <div class="pbmit-service-content">
                                        <p>Advance Care Nursing provides knowledgeable and specialized care for complex medical conditions. Attention is guaranteed to treat and support every special need.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('advance-care') }}">
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
                                    <img src="{{ asset('assets/images/services/service-04.jpg') }}" class="img-fluid" alt="service 4">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-kidney"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Basic Care Nursing</h3>
                                    <div class="pbmit-service-content">
                                        <p>Basic care nursing refers to the general supervision of the patient's daily activities and assistance in the performance of daily living activities to promote comfort and well-being.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('basic-care') }}">
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
                                    <img src="{{ asset('assets/images/services/service-05.jpg') }}" class="img-fluid" alt="service 5">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-headache"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Clinical or Bedside Attendant</h3>
                                    <div class="pbmit-service-content">
                                        <p>Clinical or Bedside Attendant services provide a patient with loving care, where one feels comfortable while aspects of day-to-day health needs are attended to.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('clinical-attendant') }}">
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
                                    <img src="{{ asset('assets/images/services/service-06.jpg') }}" class="img-fluid" alt="service 6">
                                </div>
                                <div class="pbmit-service-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-pills"></i>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">Short term Nursing</h3>
                                    <div class="pbmit-service-content">
                                        <p>Short Term Nursing refers to the kind of temporary, specialized care and health assistance offered to make the fast and successful recovery process of patients' lives.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <a href="{{ route('short-term') }}">
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