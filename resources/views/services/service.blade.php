@extends('include.app')

@section('title', 'Our Services - Livefly Healthcare | Comprehensive Home Healthcare Solutions')
@section('meta_description', 'Explore Livefly Healthcare’s wide range of services, including nursing care, physiotherapy, elder care, rehabilitation, diagnostic tests, and more. Compassionate care at your doorstep.')
@section('keywords', 'Livefly Healthcare services, home healthcare, nursing care, physiotherapy, elder care, rehabilitation therapies, diagnostic tests, home medical care, Kolkata healthcare services')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Services</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">Services</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">

    <!-- Service Start -->
    <section class="section-lgt pbmit-bg-color-blackish home1-service-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pbmit-heading-subheading text-center">
                        <h4 class="pbmit-subtitle">Nursing Care</h4>
                        <h2 class="pbmit-title text-white">Our Comprehensive Nursing Care Services</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="swiper-slider" data-autoplay="true" data-dots="true" data-arrows="false" data-columns="3" data-margin="0" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
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
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
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
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
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
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide4 -->
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
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide5 -->
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
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                            <div class="swiper-slide">
                                <!-- Slide6 -->
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
                                                    <a href="service-details.html">
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
                </div>
            </div>
        </div>
    </section>

    <section class="section-lgt home1-team-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pbmit-heading-subheading text-center">
                        <h4 class="pbmit-subtitle">Rehabilitation Therapies & Health Tests</h4>
                        <h2 class="pbmit-title">Our Rehabilitation Therapies & Health Tests Services</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="swiper-slider" data-autoplay="false" data-dots="true" data-arrows="false" data-columns="3" data-margin="0" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
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
                                                <h3 class="pbmit-service-title">Physiotherapy</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Physiotherapy improves mobility and functioning through individually tailored exercises, manual therapy, and other rehabilitative techniques, promoting recovery and general health.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
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
                                                <h3 class="pbmit-service-title">Speech & Swallow therapy</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Speech & Swallow Therapy provides individualized exercises and techniques to maximize communication and swallowing skills, thereby enhancing the patient's quality of life and safety.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
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
                                                <h3 class="pbmit-service-title">Polysomnography test (PSG)</h3>
                                                <div class="pbmit-service-content">
                                                    <p>The polysomnography test is conducted by observing the brain's activity, breathing, and body movements while one is asleep. It, therefore, diagnoses sleep disorders efficiently and effectively.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide4 -->
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
                                                <h3 class="pbmit-service-title">Arterial blood gas analysis (ABG)</h3>
                                                <div class="pbmit-service-content">
                                                    <p>ABG measures the concentration of oxygen, concentration of carbon dioxide, and acidity in the blood hence an assessment of respiratory and metabolic function of the body.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide5 -->
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
                                                <h3 class="pbmit-service-title">Ambulatory BP monitoring(AVPM)</h3>
                                                <div class="pbmit-service-content">
                                                    <p>On the other hand, ambulatory blood pressure monitoring reads blood pressure over a 24-hour period to give an overview of how it fluctuates and diagnose hypertension.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide6 -->
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
                                                <h3 class="pbmit-service-title">Portable X-ray</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Portable X-ray provides convenience by imaging the patient at their location. Imaging at the patient's bedside eliminates the transport hassles to the radiology facility, thus offering a rapid diagnosis.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide7 -->
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
                                                <h3 class="pbmit-service-title">Holter</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Holter monitoring basically involves the continuous recording of the activities of the heart for 24-48 hours, thereby indicating irregularities and showing, in detail, the cardiac functions.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
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
                </div>
            </div>
        </div>
    </section>

    <section class="section-lgt pbmit-bg-color-blackish">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pbmit-heading-subheading text-center">
                        <h4 class="pbmit-subtitle">Nursing Care</h4>
                        <h2 class="pbmit-title text-white">Our Others Comprehensive Services</h2>
                    </div>
                </div>
                <div class="col-12 pb-3">
                    <div class="swiper-slider" data-autoplay="true" data-dots="true" data-arrows="false" data-columns="3" data-margin="0" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
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
                                                <h3 class="pbmit-service-title">Telemedicine</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Telemedicine is the process of remote consultation and rendering care digitally on online platforms, providing convenience and ease of access to healthcare from any location.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
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
                                                <h3 class="pbmit-service-title">Palliative care/Hospice Care</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Palliative care/hospice is focused on comfort, pain management, and emotional support to patients who have serious or terminal illnesses to improve the quality of life</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
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
                                                <h3 class="pbmit-service-title">Senior citizen care</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Senior Citizen Care is a kind of care that is very supportive and helpful for elderly people. It deals with the medical, emotional, and daily living needs with compassion and expertise.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
                                                        <span class="pbmit-btn-text">Explore More</span>
                                                        <i class="pbmit-base-icon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide4 -->
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
                                                <h3 class="pbmit-service-title">Sample collection</h3>
                                                <div class="pbmit-service-content">
                                                    <p>Sample Collection involves taking biological samples and sending them to the laboratory for examination; the manner in which they are handled and transported impacts the accuracy of the results.</p>
                                                </div>
                                                <div class="pbmit-service-btn">
                                                    <a href="service-details.html">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- Client- Start -->
    <section class="home2-client-section pt-lg-5">
        <div class="container">
            <div class="swiper-slider" data-autoplay="true" data-dots="false" data-arrows="false" data-columns="5" data-margin="0" data-effect="slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="pbmit-client-style-1 black">
                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                <h4 class="pbmit-hide">client 6</h4>
                                <div class="pbmit-client-hover-img">
                                    <img src="{{ asset('assets/images/client/client-hover-01.png') }}" alt="client hover 1" />
                                </div>
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/client/client-logo-01.png') }}" alt="client 1" />
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-client-style-1 black">
                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                <h4 class="pbmit-hide">client 5</h4>
                                <div class="pbmit-client-hover-img">
                                    <img src="{{ asset('assets/images/client/client-hover-06.png') }}" alt="client hover 6" />
                                </div>
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/client/client-logo-06.png') }}" alt="client 6" />
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-client-style-1 black">
                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                <h4 class="pbmit-hide">client 4</h4>
                                <div class="pbmit-client-hover-img">
                                    <img src="{{ asset('assets/images/client/client-hover-03.png') }}" alt="client hover 3 /">
                                </div>
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/client/client-logo-03.png') }}" alt="client 3 /">
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-client-style-1 black">
                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                <h4 class="pbmit-hide">client 3</h4>
                                <div class="pbmit-client-hover-img">
                                    <img src="{{ asset('assets/images/client/client-hover-02.png') }}" alt="client hover 2 /">
                                </div>
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/client/client-logo-02.png') }}" alt="client 2 /">
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-client-style-1 black">
                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                <h4 class="pbmit-hide">client 2</h4>
                                <div class="pbmit-client-hover-img">
                                    <img src="{{ asset('assets/images/client/client-hover-05.png') }}" alt="client hover 5" />
                                </div>
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/client/client-logo-05.png') }}" alt="client 5" />
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-client-style-1 black">
                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                <h4 class="pbmit-hide">client 1</h4>
                                <div class="pbmit-client-hover-img">
                                    <img src="{{ asset('assets/images/client/client-hover-04.png') }}" alt="client hover 4" />
                                </div>
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('assets/images/client/client-logo-04.png') }}" alt="client 4" />
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client- End -->
</div>
<!-- Page Content End -->

@endsection