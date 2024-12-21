@extends('include.app')

@section('content')

      <!-- Title Bar -->
      <div class="pbmit-title-bar-wrapper">
            <div class="container">
               <div class="pbmit-title-bar-content">
                  <div class="pbmit-title-bar-content-inner">
                     <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                           <h1 class="pbmit-tbar-title">Our Key Differntiators</h1>
                        </div>
                     </div>
                     <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                         <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                         <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                         <span><span class="post-root post post-post current-item">Our Key Differntiators</span></span>
                         </div>
                     </div>
                  </div>
               </div> 
            </div> 
      </div>
      <!-- Title Bar End-->

    <div class="page-content">

         <!-- What we do Start -->
        <section>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-6 clinic-colum">
                    </div>
                    <div class="col-lg-6 clinic-bg-color position-relative">
                    <div class="home-2-video-bg">
                        <a href="https://www.youtube.com/watch?v=otN60BSuZrg" class="home-2-video-btn pbmin-lightbox-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="clinic-content">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">What we do</h4>
                            <h2 class="pbmit-title text-white">A great destination for nursing care & home care</h2>
                        </div>
                        <p class="text-white pe-4">Our Philosophy We are committed to providing individualized home care with a compassionate touch. With personalized service packages to total patient care, our team provides the necessary support that is highly responsive and well-communicated. Our models offer both care and safety features, while offering remote supervision and cutting edge responses to continue a path of support at any phase needed.
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

        <!-- Our History --> 
        <section class="pbmit-bg-color-light home3-info-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="pbmit-heading-subheading text-left">
                            <h4 class="pbmit-subtitle">Our Key Differntiators</h4>
                            <h2 class="pbmit-title">What Makes us most trusted homecare in Kolkata.</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="mt-0 mb-4 mt-md-5">We are distinguished by the attention we pay to you, providing bespoke service offerings that cater specifically for each individual case. It is a team of top professionals who oversee and champion, from afar. Close, open communication on both sides allows for constant, consistent coordination and trust.</p>
                    </div>
                </div>
                <div class="row home3-info-box-wrap">
                <div class="col-md-4">
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="d-flex">
                            <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-doctor-1"></i>
                                </div>
                            </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                Responsive Homecare
                            </h2>
                            <div class="pbmit-heading-desc">Fast, direct attention to meet specific in-home health requirements.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="d-flex">
                            <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-calendar"></i>
                                </div>
                            </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                Custom-made service
                            </h2>
                            <div class="pbmit-heading-desc">Service packages planned to meet your custom needs.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="d-flex">
                            <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-doctor"></i>
                                </div>
                            </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                Supervision
                            </h2>
                            <div class="pbmit-heading-desc">Professional, experienced eyes to ensure quality and the safety of clients.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="d-flex">
                            <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-medicine"></i>
                                </div>
                            </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                Patient Care
                            </h2>
                            <div class="pbmit-heading-desc">Comprehensive and compassionate care for all your health needs.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="d-flex">
                            <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-information"></i>
                                </div>
                            </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                Well Communication
                            </h2>
                            <div class="pbmit-heading-desc">We provide well communication &amp; best medical facility in clinic.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="d-flex">
                            <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-stethoscope-1"></i>
                                </div>
                            </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                5+ Years Experience
                            </h2>
                            <div class="pbmit-heading-desc">We have a 5+ Years Experience and best facility in the Homecare Services.</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>        
            </div> 
        </section>
        <!-- Our History End -->

         <!-- Testimonial Start -->
            <section class="home3-testimonial-section-bg section-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">Testimonials</h4>
                            <h2 class="pbmit-title text-white">What people <br/>say about us</h2>
                        </div>
                        <p class="border-bottom pb-4 text-white me-3">How we serve our patients.</p>
                        <div class="pbminfotech-ele-fid-style-2 pb-5 pb-lg-0 ">
                            <div class="d-flex">
                                <div class="pbmit-sbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-smiling text-white"></i>
                                    </div>
                                </div>
                                <div class="pbmit-fld-contents">
                                    <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="8850" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">9980</span><span class="pbmit-fid-sub"><sup>+</sup></span>        
                                    </h4>
                                    <h3 class="pbmit-fid-title">Happy Patients</h3>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-8">
                        <div class="swiper-slider" data-autoplay="false" data-dots="true" data-arrows="false" data-columns="2" data-margin="30" data-effect="slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Slide1 -->
                                    <article class="pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-box-desc">
                                                <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                </div>
                                                <blockquote class="pbminfotech-testimonial-text">
                                                <div>I appreciate your hospital really good environment and excellent patient care. You are continuously handle patient treatment wonderfully. Thanks for your great service. Please enjoy the chocolates.</div>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-author-wrapper d-flex align-items-center">
                                                <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-01.jpg') }}" class="img-fluid" alt="testimonial 1" />
                                                </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                <h3 class="pbminfotech-box-title">Amanda Kinedy</h3>
                                                <div class="pbminfotech-testimonial-detail">Hematology</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </article>
                                </div>
                                <div class="swiper-slide ">
                                    <!-- Slide2 -->
                                    <article class="pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-box-desc">
                                                <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                </div>
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <div>I appreciate your hospital really good environment and excellent patient care. You are continuously handle patient treatment wonderfully. Thanks for your great service. Please enjoy the chocolates.</div>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-author-wrapper d-flex align-items-center">
                                                <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-02.jpg') }}" class="img-fluid" alt="testimonial 2" />
                                                </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                <h3 class="pbminfotech-box-title">Richard Powers</h3>
                                                <div class="pbminfotech-testimonial-detail">Orthopedic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </article>
                                </div>
                                <div class="swiper-slide ">
                                    <!-- Slide3 -->
                                    <article class=" pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-box-desc">
                                                <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                </div>
                                                <blockquote class="pbminfotech-testimonial-text">
                                                <div>I appreciate your hospital really good environment and excellent patient care. You are continuously handle patient treatment wonderfully. Thanks for your great service. Please enjoy the chocolates.</div>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-author-wrapper d-flex align-items-center">
                                                <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-03.jpg') }}" class="img-fluid" alt="testimonial 3" />
                                                </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                <h3 class="pbminfotech-box-title">Maria Rusconi</h3>
                                                <div class="pbminfotech-testimonial-detail">Cardiology</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </article>
                                </div>
                                <div class="swiper-slide ">
                                    <!-- Slide4 -->
                                    <article class="pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-box-desc">
                                                <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                </div>
                                                <blockquote class="pbminfotech-testimonial-text">
                                                <div>I appreciate your hospital really good environment and excellent patient care. You are continuously handle patient treatment wonderfully. Thanks for your great service. Please enjoy the chocolates.</div>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-author-wrapper d-flex align-items-center">
                                                <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-04.jpg') }}" class="img-fluid" alt="testimonial 4" />
                                                </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                <h3 class="pbminfotech-box-title">Striven Porter</h3>
                                                <div class="pbminfotech-testimonial-detail">Pulmonology</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </article>
                                </div>
                                <div class="swiper-slide ">
                                    <!-- Slide5 -->
                                    <article class="pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-box-desc">
                                                <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                </div>
                                                <blockquote class="pbminfotech-testimonial-text">
                                                <div>I appreciate your hospital really good environment and excellent patient care. You are continuously handle patient treatment wonderfully. Thanks for your great service. Please enjoy the chocolates.</div>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-author-wrapper d-flex align-items-center">
                                                <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-05.jpg') }}" class="img-fluid" alt="testimonial 5" />
                                                </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                <h3 class="pbminfotech-box-title">Elena Blackwell</h3>
                                                <div class="pbminfotech-testimonial-detail">Dermatology</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Slide6 -->
                                    <article class="pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-box-desc">
                                                <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                </div>
                                                <blockquote class="pbminfotech-testimonial-text">
                                                <div>I appreciate your hospital really good environment and excellent patient care. You are continuously handle patient treatment wonderfully. Thanks for your great service. Please enjoy the chocolates.</div>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-author-wrapper d-flex align-items-center">
                                                <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-06.jpg') }}" class="img-fluid" alt="testimonial 6" />
                                                </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                <h3 class="pbminfotech-box-title">Alex Margaret</h3>
                                                <div class="pbminfotech-testimonial-detail">Neurology</div>
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
        <!-- Testimonial End -->

    </div>

@endsection