@extends('include.app')

@section('title', 'Livefly Healthcare - Trusted Home Healthcare and Nursing Services')
@section('meta_description', 'Welcome to Livefly Healthcare. Explore our professional home healthcare services, including nursing care, physiotherapy, health tests, telemedicine, and senior citizen care.')
@section('keywords', 'Livefly Healthcare, home healthcare, nursing services, physiotherapy, health tests, telemedicine, senior citizen care, Kolkata healthcare, home nursing services, personalized care')


@section('content')

<!-- START Slider Demo 1 REVOLUTION SLIDER 6.5.25 -->
<div class="pbmit-slider-area">
   <p class="rs-p-wp-fix"></p>
   <rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="slider-demo-2" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:100%; height: 500px;">
      <rs-module id="rev_slider_2_1" style="height: 500px;" data-version="6.5.25">
         <rs-slides>
            <rs-slide style="position: absolute; height: 500px;" data-key="rs-6" data-title="Slide" data-thumb="{{ asset('assets/revolution/images/slider-02-c-100x50.jpg') }}" data-anim="ms:600;r:0;" data-in="o:0;" data-out="a:false;">
               <img src="{{ asset('assets/revolution/images/dummy.png') }}" alt="" title="slider-03-b" width="1920" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('assets/revolution/images/slider-02-c.jpg') }}" data-bg="p:center top;" data-no-retina>
               <!-- Text Layer -->
               <rs-layer
                  id="slider-2-slide-4-layer-0"
                  data-type="text"
                  data-color="#081839"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,30px;y:m;yo:-81px,-67px,-37px,-54px;"
                  data-text="w:nowrap;s:69,55,47,29;l:69,55,47,31;ls:-2px,-1px,-1px,-1px;fw:700;"
                  data-frame_0="x:-50,-41,-31,-19;"
                  data-frame_1="st:1190;sp:1000;sR:1190;"
                  data-frame_999="o:0;st:w;sR:6810;"
                  style="z-index:8;font-family:'Lato';">Personalized <br />
                  Care at Home.
               </rs-layer>
               <!-- Video Button -->
               <!-- Subtitle Layer -->
               <rs-layer
                  id="slider-2-slide-4-layer-12"
                  data-type="text"
                  data-color="#081839"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,18px;y:m;yo:49px,40px,27px,16px;"
                  data-text="w:nowrap;s:20,22,22,15;l:34,28,28,18;ls:-1px,0px,0px,0px;fw:600;"
                  data-vbility="t,t,f,f"
                  data-frame_0="x:-50,-41,-31,-19;"
                  data-frame_1="st:1400;sp:1000;"
                  data-frame_999="o:0;st:w;sR:6600;"
                  style="z-index:10;font-family:'Lato';">Receive compassionate care tailored to your unique needs,<br> right in the comfort of your own home.
               </rs-layer>

               <!-- Learn More Button -->
               <a
                  id="slider-2-slide-4-layer-18"
                  class="rs-layer rev-btn"
                  href="{{ route('basic-care') }}" target="_self" rel="nofollow"
                  data-type="button"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,30px;y:m;yo:149px,124px,78px,31px;"
                  data-text="w:normal;s:16,13,13,13;l:55,45,50,45;ls:0px,0px,1px,1px;fw:700;"
                  data-dim="minh:0px,none,none,none;"
                  data-padding="r:40,33,30,19;l:40,33,30,19;"
                  data-frame_0="y:50,41,31,19;"
                  data-frame_1="st:1640;sp:1000;sR:1640;"
                  data-frame_999="o:0;st:w;sR:6360;"
                  data-frame_hover="c:#081839;bgc:#fff;bor:0px,0px,0px,0px;bri:100%;"
                  style="z-index:11;background-color:#1bbde4;font-family:'Lato';">Learn More
               </a>
            </rs-slide>
            <!-- Second Slide -->
            <rs-slide style="position: absolute; height: 500px;" data-key="rs-2" data-title="Slide" data-thumb="{{ asset('revolution/images/slider-02-a1-100x50.jpg') }}" data-anim="ms:600;r:0;" data-in="o:0;" data-out="a:false;">
               <img src="{{ asset('assets/revolution/images/dummy.png') }}" alt="" title="slider-02-a1.jpg" width="1920" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('assets/revolution/images/slider-02-a1.jpg') }}" data-bg="p:center top;" data-no-retina>
               <!-- Text Layer -->
               <rs-layer
                  id="slider-2-slide-2-layer-0"
                  data-type="text"
                  data-color="#081839"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,30px;y:m;yo:-81px,-67px,-37px,-54px;"
                  data-text="w:nowrap;s:69,55,47,29;l:69,55,47,31;ls:-2px,-1px,-1px,-1px;fw:700;"
                  data-frame_0="x:-50,-41,-31,-19;"
                  data-frame_1="st:1190;sp:1000;sR:1190;"
                  data-frame_999="o:0;st:w;sR:6810;"
                  style="z-index:8; font-family:'Lato';">Compassionate Nursing Care,<br />
                  Tailored to Your Needs
               </rs-layer>

               <!-- Subtitle Layer -->
               <rs-layer
                  id="slider-2-slide-2-layer-12"
                  data-type="text"
                  data-color="#081839"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,18px;y:m;yo:49px,40px,27px,16px;"
                  data-text="w:nowrap;s:20,22,22,15;l:34,28,28,18;ls:-1px,0px,0px,0px;fw:600;"
                  data-vbility="t,t,f,f"
                  data-frame_0="x:-50,-41,-31,-19;"
                  data-frame_1="st:1400;sp:1000;"
                  data-frame_999="o:0;st:w;sR:6600;"
                  style="z-index:10;font-family:'Lato';">
                  It's our dedicated nurses who make sure you're comfortable, cared for as a person,<br />
                  from medical help needed every day to ensuring your emotional needs are met.<br />
                  We will make a difference in your life.
               </rs-layer>

               <!-- Learn More Button -->
               <a
                  id="slider-2-slide-2-layer-18"
                  class="rs-layer rev-btn"
                  href="{{ route('nursing-care') }}" target="_self" rel="nofollow"
                  data-type="button"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,30px;y:m;yo:149px,124px,78px,31px;"
                  data-text="w:normal;s:16,13,13,13;l:55,45,50,45;ls:0px,0px,1px,1px;fw:700;"
                  data-dim="minh:0px,none,none,none;"
                  data-padding="r:40,33,30,19;l:40,33,30,19;"
                  data-frame_0="y:50,41,31,19;"
                  data-frame_1="st:1640;sp:1000;sR:1640;"
                  data-frame_999="o:0;st:w;sR:6360;"
                  data-frame_hover="c:#081839;bgc:#fff;bor:0px,0px,0px,0px;bri:100%;"
                  style="z-index:11;background-color:#1bbde4;font-family:'Lato';">Learn More
               </a>
            </rs-slide>
            <!---- Third Slide -->
            <rs-slide style="position: absolute; height: 500px;" data-key="rs-4" data-title="Slide" data-thumb="{{ asset('assets/revolution/images/slider-02-b-100x50.jpg') }}" data-anim="ms:600;r:0;" data-in="o:0;" data-out="a:false;">
               <img src="{{ asset('assets/revolution/images/dummy.png') }}" alt="" title="slider-02-b" width="1920" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('assets/revolution/images/slider-02-b.jpg') }}" data-bg="p:center top;" data-no-retina>
               <!-- Text Layer -->
               <rs-layer
                  id="slider-2-slide-2-layer-0"
                  data-type="text"
                  data-color="#081839"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,30px;y:m;yo:-81px,-67px,-37px,-54px;"
                  data-text="w:nowrap;s:69,55,47,29;l:69,55,47,31;ls:-2px,-1px,-1px,-1px;fw:700;"
                  data-frame_0="x:-50,-41,-31,-19;"
                  data-frame_1="st:1190;sp:1000;sR:1190;"
                  data-frame_999="o:0;st:w;sR:6810;"
                  style="z-index:8;font-family:'Lato';">Dedicated Elder Care<br />
                  for a Fulfilling Life.
               </rs-layer>
               <!-- Video Button -->
               <!-- Subtitle Layer -->
               <rs-layer
                  id="slider-2-slide-3-layer-12"
                  data-type="text"
                  data-color="#081839"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,18px;y:m;yo:49px,40px,27px,16px;"
                  data-text="w:nowrap;s:20,22,22,15;l:34,28,28,18;ls:-1px,0px,0px,0px;fw:600;"
                  data-vbility="t,t,f,f"
                  data-frame_0="x:-50,-41,-31,-19;"
                  data-frame_1="st:1400;sp:1000;"
                  data-frame_999="o:0;st:w;sR:6600;"
                  style="z-index:10;font-family:'Lato';">
                  Enjoy life with the best senior care,<br /> personalized to your unique needs and wishes. Your comfort, your health,<br /> and your happiness are our top priorities.
               </rs-layer>

               <!-- Learn More Button -->
               <a
                  id="slider-2-slide-4-layer-18"
                  class="rs-layer rev-btn"
                  href="{{ route('senior-care') }}" target="_self" rel="nofollow"
                  data-type="button"
                  data-rsp_ch="on"
                  data-xy="xo:30px,24px,30px,30px;y:m;yo:149px,124px,78px,31px;"
                  data-text="w:normal;s:16,13,13,13;l:55,45,50,45;ls:0px,0px,1px,1px;fw:700;"
                  data-dim="minh:0px,none,none,none;"
                  data-padding="r:40,33,30,19;l:40,33,30,19;"
                  data-frame_0="y:50,41,31,19;"
                  data-frame_1="st:1640;sp:1000;sR:1640;"
                  data-frame_999="o:0;st:w;sR:6360;"
                  data-frame_hover="c:#081839;bgc:#fff;bor:0px,0px,0px,0px;bri:100%;"
                  style="z-index:11;background-color:#1bbde4;font-family:'Lato';">Learn More
               </a>
            </rs-slide>
         </rs-slides>
      </rs-module>
   </rs-module-wrap>
</div>
<!-- END REVOLUTION SLIDER -->

<!-- page content -->
<div class="page-content">

   <!-- Banner Featured -->
   <section class="bg-white">
      <div class="container p-sm-0">
         <div class="row g-0">
            <div class="col-md-6 d-flex align-items-center home1-infosection">
               <div class="pbmit-heading-subheading m-0">
                  <h4 class="pbmit-subtitle">24x7 Emergency Assistance <br /> call us</h4>
                  <h2 class="pbmit-title"><a href="tel:03346041975">033-46041975</a></h2>
               </div>
            </div>
            <div class="col-md-6">
               <article class="pbmit-static-box-style-1 blue-bg-color">
                  <div class="d-flex">
                     <div class="pbmit-imgbox">
                        <img src="{{ asset('assets/images/img-01.jpg') }}" alt="Our Location Support" class="w-100" />
                     </div>
                     <div class="pbmit-contentbox-wrap">
                        <div class="pbmit-contentbox">
                           <div class="pbmit-ihbox-icon-overlay">
                              <div class="pbmit-ihbox-icon-wrapper">
                                 <i class="pbmit-doctery-icon pbmit-doctery-icon-calendar-1"></i>
                              </div>
                           </div>
                           <div class="pbmit-contentbox-des">
                              <div class="pbmit-ihbox-icon">
                                 <div class="pbmit-ihbox-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-calendar-1"></i>
                                 </div>
                              </div>
                              <div class="pbminfotech-box-title">
                                 <h4>Request Appoinment</h4>
                              </div>
                              <div class="pbminfotech-static-box-desc">Easily book an appointment with our specialized medical team. Get personalized attention when you want, where you want it.</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
         <div class="row g-0">
            <div class="col-md-6">
               <article class="pbmit-static-box-style-1">
                  <div class="d-flex">
                     <div class="pbmit-imgbox">
                        <img src="{{ asset('assets/images/img-2.jpg') }}" alt="Our Location Support" class="w-100" />
                     </div>
                     <div class="pbmit-contentbox-wrap">
                        <div class="pbmit-contentbox">
                           <div class="pbmit-ihbox-icon-overlay">
                              <div class="pbmit-ihbox-icon-wrapper">
                                 <i class="pbmit-doctery-icon-pin"></i>
                              </div>
                           </div>
                           <div class="pbmit-contentbox-des">
                              <div class="pbmit-ihbox-icon">
                                 <div class="pbmit-ihbox-icon-wrapper">
                                    <i class="pbmit-doctery-icon-pin"></i>
                                 </div>
                              </div>
                              <div class="pbminfotech-box-title">
                                 <h4>Our Site Assistance</h4>
                              </div>
                              <div class="pbminfotech-static-box-desc">Feel free to navigate our website. Our active support team is there to support you every step and query.</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-md-6">
               <article class="pbmit-static-box-style-1 global-bg-color">
                  <div class="d-flex">
                     <div class="pbmit-imgbox">
                        <img src="{{ asset('assets/images/img-03.jpg') }}" alt="Our Location Support" class="w-100" />
                     </div>
                     <div class="pbmit-contentbox-wrap">
                        <div class="pbmit-contentbox">
                           <div class="pbmit-ihbox-icon-overlay">
                              <div class="pbmit-ihbox-icon-wrapper">
                                 <i class="pbmit-doctery-icon pbmit-doctery-icon-doctor"></i>
                              </div>
                           </div>
                           <div class="pbmit-contentbox-des">
                              <div class="pbmit-ihbox-icon">
                                 <div class="pbmit-ihbox-icon-wrapper">
                                    <i class="pbmit-doctery-icon pbmit-doctery-icon-doctor"></i>
                                 </div>
                              </div>
                              <div class="pbminfotech-box-title">
                                 <h4>Find The Best Care for You</h4>
                              </div>
                              <div class="pbminfotech-static-box-desc">Personalized health solutions based on individual needs: We help you find the best care and support available.</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </div>
   </section>
   <!-- Banner Featured End -->

   <!-- About Start -->
   <section class="home1-about-us">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 align-self-end">
               <img src="{{ asset('assets/images/img-02.png') }}" class="about-us-img" alt="" />
            </div>
            <div class="col-lg-6">
               <div class="pbmit-heading-subheading my-4">
                  <h4 class="pbmit-subtitle">
                     Why Livefly
                  </h4>
                  <h2 class="pbmit-title">
                     Caring for our Patients
                  </h2>
               </div>
               <div class="mb-5">
                  <p>We at Livefly Health Care, bring in tailor made professional and innovative home healthcare services, available 24/7 at your doorstep. We understand the importance of care needed by people with chronic conditions or disabilities and we aim to provide ‘Caring for Patients, One Life at a Time.’ Our team of skilled professionals are available at your service and care for you at your convenience and needs.</p>
               </div>
               <div class="row pb-4 align-items-center">
                  <div class="col-md-12 ps-5">
                     <div class="pbmit-ihbox pbmit-ihbox-style-6">
                        <div class="d-flex align-items-center">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                 <img src="{{ asset('assets/images/author.png') }}" alt="Mr. Soumalya Chakravorty" />
                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">Mr. Soumalya Chakravorty</h2>
                              <h6 class="pbmit-element-heading"> Executive Director</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="list-wrap">
                  <div class="row">
                     <div class="col-md-6">
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item">
                              <i class="pbmit-doctery-icon-approved-signal"></i> Team’s hands-on experience
                           </li>
                           <li class="list-group-item">
                              <i class="pbmit-doctery-icon-approved-signal"></i> Strong on-field resource presence
                           </li>
                           <li class="list-group-item">
                              <i class="pbmit-doctery-icon-approved-signal"></i> Tailored and customized packages
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item">
                              <i class="pbmit-doctery-icon-approved-signal"></i> Skilled nurses in remote areas
                           </li>
                           <li class="list-group-item">
                              <i class="pbmit-doctery-icon-approved-signal"></i> Personal touch experience
                           </li>
                           <li class="list-group-item">
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
   <!-- About End -->

   <!-- Featured Service Start -->
   <section class="pbmit-bg-color-light section-lgx  home3-tab-section-bg">
      <div class="container">
         <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">Services</h4>
            <h2 class="pbmit-title">Our Comprehensive Services</h2>
         </div>
         <div>
            <ul class="nav nav-tabs nav-justified" role="tablist">
               <li class="nav-item" role="presentation">
                  <a class="nav-link active" data-bs-toggle="tab" href="#tab-2-1" aria-selected="true" role="tab">
                     <span>Nursing Care</span>
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2-2" aria-selected="false" role="tab" tabindex="-1">
                     <span>Rehabilitation Therapies</span>
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2-3" aria-selected="false" role="tab" tabindex="-1">
                     <span>Health Tests</span>
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link " data-bs-toggle="tab" href="#tab-2-4" aria-selected="true" role="tab">
                     <span>Telemedicine</span>
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2-5" aria-selected="false" role="tab" tabindex="-1">
                     <span>Palliative Care</span>
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2-6" aria-selected="false" role="tab" tabindex="-1">
                     <span>Elder Care</span>
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2-7" aria-selected="false" role="tab" tabindex="-1">
                     <span>Sample Collection</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane show active" id="tab-2-1" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/img-15.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Comprehensive Nursing Care with a Touch of Care.</h2>
                           <p class="mb-4 pe-sm-5 pe-md-0">All our nursing care services offer customized care towards individual needs. These skillful nursing services reach places both local and remote with equal sensitivity. Hence, quality care with compassion is given in taking care of all patients under unique situations.</p>
                        </div>
                        <div class="row d-flex ">
                           <div class="col-md-5">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Critical Care Nursing
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> ICU Nursing Care
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Advance Care Nursing
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-7">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Basic Care Nursing
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Clinical Attendant/Bedside Attendant
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Short Term Nursing
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('nursing-care') }}" class="pbmit-btn mt-4">Discover More</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab-2-2" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Total Rehabilitation Therapies for Best Recovery</h2>
                           <p class="mb-4 pe-sm-5">Our rehabilitation therapies are fully equipped to give patients a holistic approach to recovery: physical, emotional, and psychological. We ensure that there is an effective process of healing and long-term wellness by customizing therapy programs to suit each patient's needs. Our highly trained therapists are dedicated to the restoration of function and optimization of the quality of life.</p>
                        </div>
                        <div class="row d-flex ">
                           <div class="col-md-5">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Expert-individualized care
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> State-of-the-art facilities
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Personalized treatment plans
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Holistic recovery approach
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Continuous progress evaluation
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Compassionate, supportive environment
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('rehabilitation-therapies') }}" class="pbmit-btn mt-4 mb-4">Discover More</a>
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/tab-img-02.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab-2-3" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/tab-img-03.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Comprehensive Health Tests for Optimal Well-being</h2>
                           <p class="mb-4 pe-sm-5">Our health tests are based on the overall investigation of your health. We do correct assessment for parameters from blood, cholesterol, and glucose levels to much more. Our tests can, therefore, identify any potential problems at a nascent stage, thereby allowing management and personalized treatment.</p>
                        </div>
                        <div class="row d-flex ">
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i>Accurate and reliable results
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Expert medical support
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Quick and efficient testing
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Comprehensive health assessments
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Advanced diagnostic technology
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Personalized health insights
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('health-tests') }}" class="pbmit-btn mt-4">Discover More</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab-2-4" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Comprehensive Telemedicine Solutions</h2>
                           <p class="mb-4 pe-sm-5">Our telemedicine service offers convenient and convenient health advice from the comfort of your home. Connect with experienced physicians, receive expert assessments, and receive personalized treatment plans through secure, high-quality video and chat communication to ensure a seamless patient experience.</p>
                        </div>
                        <div class="row d-flex">
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Secure video consultations
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Experienced medical professionals
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Easy appointment scheduling
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Real-time health monitoring
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Prescription and referral services
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Comprehensive patient support
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('telemedicine') }}" class="pbmit-btn mt-4 mb-4">Discover More</a>
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/tab-img-04.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab-2-5" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/tab-img-05.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Comprehensive Hospice and Palliative Services</h2>
                           <p class="mb-4 pe-sm-5">Palliative and hospice care services are designed to be custom tailored for our patients who face life-threatening illness. Our extra help care, nursing and supportive environment, make life easier for everyone.</p>
                        </div>
                        <div class="row d-flex ">
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Personalized patient care
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Skilled nursing professionals
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Emotional support services
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Comfort-focused approach
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Family support guidance
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Experienced care team
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('hospice') }}" class="pbmit-btn mt-4">Discover More</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab-2-6" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Elder Care We Deliver Personally</h2>
                           <p class="mb-4 pe-sm-5">With friendly, customized care that feels like home away from home. We customize packages to the people and communities we work with, getting them what they need using a web of professionals out in remote places. Our staff has been trained to provide kind and dependable care.</p>
                        </div>
                        <div class="row d-flex ">
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Personalized care plans
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Skilled, compassionate staff
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Whole-Body Health Care
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> 24/7 support availability
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Personalized residential arrangements
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Seamless family communication
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('senior-care') }}" class="pbmit-btn mt-4 mb-4">Discover More</a>
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/tab-img-06.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab-2-7" role="tabpanel">
                  <div class="row">
                     <div class="col-xl-6 col-md-6">
                        <img src="{{ asset('assets/images/tab-img-07.jpg') }}" class="img-fluid w-100" alt="" />
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <div class="pbmit-heading-subheading mt-4">
                           <h2 class="home3-tab-content-inner-h2">Fast and Trustworthy Sampling Services</h2>
                           <p class="mb-4 pe-sm-5">We pride ourselves with our sample collection service, providing an efficient and professional way to collect samples for quality service delivery. We ensure safe and sanitary materials capture, flexible scheduling, as well as complete monitoring to keep sample specimens stable from beginning to the end.</p>
                        </div>
                        <div class="row d-flex ">
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Prompt sample pickup
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Secure handling procedures
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Hygienic collection methods
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-group list-group-borderless">
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Convenient scheduling options
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Accurate result tracking
                                 </li>
                                 <li class="list-group-item">
                                    <i class="pbmit-doctery-icon-approved-signal"></i> Professional service team
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="{{ route('sample-collection') }}" class="pbmit-btn mt-4">Discover More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Featured Service End -->

   <!-- Nurse Enroll Start -->
   <section class="home2-team-section-bg">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center icon-box-wrapper">
               <div class="icon-box-icon me-md-5 me-sm-0">
                  <i aria-hidden="true" class="pbmit-doctery-icon pbmit-doctery-icon-hospital"></i>
               </div>
               <div class="icon-box-content">
                  <h3 class="text-white">Are you a Nurse, Want to Join our team?</h3>
                  <h3 class="pbmit-color-global">Get in touch with us.</h3>
               </div>
            </div>
            <div class="my-sm-4">
               <a href="{{ route('nurse') }}" class="pbmit-btn  pbmit-btn-hover-white">Register Now</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Nurse Enroll End -->

   <!-- Process Start -->
   <section class="section-lg home3-team-section-bg">
      <div class="container">
         <div class="pbmit-heading-subheading text-center mb-5">
            <h4 class="pbmit-subtitle">Simple Process</h4>
            <h2 class="pbmit-title">How we help our clients</h2>
         </div>
         <div class="row ">
            <div class="col-md-6 col-lg-3">
               <div class="pbmit-ihbox pbmit-ihbox-style-2 pb-md-4 pb-sm-4">
                  <div class="pbmit-ihbox-box">
                     <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-icon">
                           <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                              <img class="img-fluid" src="{{ asset('assets/images/img-16.jpg') }}" alt="Make Appointment" />
                           </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                           <h2 class="pbmit-element-title">Make Appointment</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="pbmit-ihbox pbmit-ihbox-style-2 pb-md-4 pb-sm-4">
                  <div class="pbmit-ihbox-box">
                     <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-icon">
                           <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                              <img class="img-fluid" src="{{ asset('assets/images/img-171.jpg') }}" alt="Make Appointment" />
                           </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                           <h2 class="pbmit-element-title">Get Consultation</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="pbmit-ihbox pbmit-ihbox-style-2 pb-md-4 pb-sm-4">
                  <div class="pbmit-ihbox-box">
                     <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-icon">
                           <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                              <img class="img-fluid" src="{{ asset('assets/images/img-18.jpg') }}" alt="Make Appointment" />
                           </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                           <h2 class="pbmit-element-title">Get Personalized Services</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="pbmit-ihbox pbmit-ihbox-style-2 pb-md-4 pb-sm-4">
                  <div class="pbmit-ihbox-box">
                     <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-icon">
                           <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                              <img class="img-fluid" src="{{ asset('assets/images/img-19.jpg') }}" alt="Make Appointment" />
                           </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                           <h2 class="pbmit-element-title"> Get Cured & Relieved</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Process End -->

   <!-- Why Choose US Start -->
   <section class="pbmit-bg-color-blackish home1-care-section">
      <div class="container">
         <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">Why Choose us</h4>
            <h2 class="pbmit-title text-white mb-5">What makes us the most trusted home care in Eastern India</h2>
         </div>
         <div class="row g-0">
            <div class="col-md-4">
               <div class="pbmit-ihbox pbmit-ihbox-style-1">
                  <div class="pbmit-ihbox-box d-flex">
                     <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper">
                           <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                              <i class="pbmit-doctery-icon pbmit-doctery-icon-doctor-1"></i>
                           </div>
                        </div>
                     </div>
                     <div class="pbmit-ihbox-contents">
                        <h2 class="pbmit-element-title text-white">Responsive Home Care</h2>
                        <div class="pbmit-heading-desc">Fast, direct attention to meet specific in-home health requirements.</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="pbmit-ihbox pbmit-ihbox-style-1">
                  <div class="pbmit-ihbox-box d-flex">
                     <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper">
                           <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                              <i class="pbmit-doctery-icon pbmit-doctery-icon-calendar"></i>
                           </div>
                        </div>
                     </div>
                     <div class="pbmit-ihbox-contents">
                        <h2 class="pbmit-element-title text-white">Customized Services</h2>
                        <div class="pbmit-heading-desc">Service packages planned to meet your custom needs.</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="pbmit-ihbox pbmit-ihbox-style-1">
                  <div class="pbmit-ihbox-box d-flex">
                     <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper">
                           <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                              <i class="pbmit-doctery-icon pbmit-doctery-icon-information"></i>
                           </div>
                        </div>
                     </div>
                     <div class="pbmit-ihbox-contents">
                        <h2 class="pbmit-element-title text-white">Supervision</h2>
                        <div class="pbmit-heading-desc">Professional, experienced eyes to ensure quality and the safety of clients.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row care-bordernone g-0">
            <div class="col-md-4 mb-md-4">
               <div class="pbmit-ihbox pbmit-ihbox-style-1">
                  <div class="pbmit-ihbox-box d-flex">
                     <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper">
                           <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                              <i class="pbmit-doctery-icon pbmit-doctery-icon-medicine"></i>
                           </div>
                        </div>
                     </div>
                     <div class="pbmit-ihbox-contents">
                        <h2 class="pbmit-element-title text-white">Best Elder Care</h2>
                        <div class="pbmit-heading-desc">Comprehensive and compassionate Elder care for all your needs.</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 mb-md-4">
               <div class="pbmit-ihbox pbmit-ihbox-style-1">
                  <div class="pbmit-ihbox-box d-flex">
                     <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper">
                           <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                              <i class="pbmit-doctery-icon pbmit-doctery-icon-information"></i>
                           </div>
                        </div>
                     </div>
                     <div class="pbmit-ihbox-contents">
                        <h2 class="pbmit-element-title text-white">Well Communication</h2>
                        <div class="pbmit-heading-desc">Communication is key here in making sure that others understand and come together to help care for you.</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 mb-md-4">
               <div class="pbmit-ihbox pbmit-ihbox-style-1">
                  <div class="pbmit-ihbox-box d-flex">
                     <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper">
                           <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                              <i class="pbmit-doctery-icon pbmit-doctery-icon-stethoscope-2"></i>
                           </div>
                        </div>
                     </div>
                     <div class="pbmit-ihbox-contents">
                        <h2 class="pbmit-element-title text-white">5+ Years Experience</h2>
                        <div class="pbmit-heading-desc">We have a 5+ Years Experience and best facility in the Homecare Services. </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Why Choose US End -->

   <!-- Counter Start -->
   <section class="home1-counter-section">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="counter-wrapper">
                  <div class="row">
                     <div class="col-md-6 col-lg-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                           <div class="pbmit-fld-contents">
                              <div class="pbmit-fld-wrap">
                                 <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="8852" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">9980</span><span class="pbmit-fid-sub"><sup>+</sup></span>
                                 </h4>
                                 <h3 class="pbmit-fid-title">Happy Patients</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                           <div class="pbmit-fld-contents">
                              <div class="pbmit-fld-wrap">
                                 <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="5" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">0</span><span class="pbmit-fid-sub"><sup>+</sup></span>
                                 </h4>
                                 <h3 class="pbmit-fid-title">Years Experience</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                           <div class="pbmit-fld-contents">
                              <div class="pbmit-fld-wrap">
                                 <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate " data-appear-animation="animateDigits" data-from="0" data-to="183" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">0</span><span class="pbmit-fid-sub"><sup>+</sup></span>
                                 </h4>
                                 <h3 class="pbmit-fid-title">Expert Team Member</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                           <div class="pbmit-fld-contents">
                              <div class="pbmit-fld-wrap">
                                 <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate " data-appear-animation="animateDigits" data-from="0" data-to="1477" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">220</span><span class="pbmit-fid-sub"><sup>+</sup></span>
                                 </h4>
                                 <h3 class="pbmit-fid-title">ICU Set Up at Home</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Counter End -->

   <!-- Testimonial Start -->
   <section class="home1-testimonial-section-bg pbmit-bg-color-light section-lg">
      <div class="container">
         <div class="pbmit-ele-header-area">
            <div class="pbmit-heading-subheading text-center pbmit-reverse-heading-yes">
               <h4 class="pbmit-subtitle">Testimonial</h4>
               <h2 class="pbmit-element-title">Satisfied Patients Reviews</h2>
            </div>
         </div>

         <div class="swiper-slider" data-autoplay="true" data-dots="true" data-arrows="false" data-columns="1" data-margin="0" data-effect="slide">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <!-- Slide1 -->
                  <article class="pbmit-testimonial-style-3 pbmit-odd pbmit-col-odd">
                     <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                           <div class="pbminfotech-box-img">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('assets/images/team1.png') }}" class="img-fuild" alt="testimonial 1">
                              </div>
                           </div>
                           <div class="pbminfotech-box-desc">
                              <blockquote class="pbminfotech-testimonial-text">
                                 <div>My experience with this Healthcare provider is excellent.I am receiving regular services with deputation of experienced nurses, equipments provider(with its maintenance), valuable advices etc.& thus my life span being energized from 82+ yrs.I am thankful to this elite agency.Thus my life is FLYING.Wish them a brighter future.</div>

                              </blockquote>
                           </div>
                           <div class="pbminfotech-box-author">
                              <div class="pbminfotech-box-star-ratings">
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                              </div>
                              <h3 class="pbminfotech-box-title">Sasanka Bhowmik</h3>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="swiper-slide">
                  <!-- Slide2 -->
                  <article class="pbmit-testimonial-style-3 pbmit-odd pbmit-col-odd">
                     <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                           <div class="pbminfotech-box-img">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('assets/images/team1.png') }}" class="img-fuild" alt="testimonial 1">
                              </div>
                           </div>
                           <div class="pbminfotech-box-desc">
                              <blockquote class="pbminfotech-testimonial-text">
                                 <div>Quite helpful resources from Livefly team. Their services from start till the end has been good. Would surely recommend this to anyone who has home care needs for any patient the only catch is one needs to be financially strong to afford these services for a longer period.</div>
                              </blockquote>
                           </div>
                           <div class="pbminfotech-box-author">
                              <div class="pbminfotech-box-star-ratings">
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star pbmit-active"></i>
                                 <i class="pbmit-base-icon-star"></i>
                              </div>
                              <h3 class="pbminfotech-box-title">Arindam Sarkar</h3>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="swiper-slide">
                  <!-- Slide3 -->
                  <article class="pbmit-testimonial-style-3 pbmit-odd pbmit-col-odd">
                     <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                           <div class="pbminfotech-box-img">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('assets/images/team1.png') }}" class="img-fuild" alt="testimonial 1">
                              </div>
                           </div>
                           <div class="pbminfotech-box-desc">
                              <blockquote class="pbminfotech-testimonial-text">
                                 <div>Very professional & prompt centre ! They have very good trained staff, have been using their services for my dad and all the male nurses were very professional & good! There has been no missed days of service n the centre keeps following up on the staff n the services! Very happy that I found this centre n got connected it has been extremely helpful!</div>
                              </blockquote>
                           </div>
                           <div class="pbminfotech-box-author">
                              <div class="pbminfotech-box-star-ratings"><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i></div>
                              <h3 class="pbminfotech-box-title">Seema Minhaz</h3>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="swiper-slide">
                  <!-- Slide4 -->
                  <article class="pbmit-testimonial-style-3 pbmit-odd pbmit-col-odd">
                     <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                           <div class="pbminfotech-box-img">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('assets/images/team1.png') }}" class="img-fuild" alt="testimonial 1">
                              </div>
                           </div>
                           <div class="pbminfotech-box-desc">
                              <blockquote class="pbminfotech-testimonial-text">
                                 <div>We used 3 male attendants from Livefly. They were all well trained ( two had earned as OT technicians and one was a qualified GNM). They were respectful and good at following instructions and did their jobs well. They all had a tendency to become engrossed in their mobile phones so sometimes had to be called several times before responding but other than that they were very good.</div>
                              </blockquote>
                           </div>
                           <div class="pbminfotech-box-author">
                              <div class="pbminfotech-box-star-ratings"><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i><i class="pbmit-base-icon-star pbmit-active"></i></div>
                              <h3 class="pbminfotech-box-title">Ranjan RC</h3>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- Testimonial End -->

   <!-- Blog Start -->
   <!-- <section class="section-lg">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-6 pbmit-heading-subheading text-left">
                        <h4 class="pbmit-subtitle">Keeping You Well.</h4>
                        <h2 class="pbmit-element-title"> Stories, Tips & Latest News </h2>
                     </div>
                     <div class="col-md-6 text-md-end mb-5 mb-md-0">
                        <a href="blog-grid.html" class="pbmit-btn">View  All Blogs</a>
                     </div>
                  </div>
                  <div class="row g-4">
                     <div class="col-lg-8">
                        <div class="row">
                           <div class="col-md-6">
                              <article class="pbmit-blog-style-1 heath-care pbmit-odd pbmit-col-odd">
                                 <div class="post-item">
                                    <div class="pbmit-featured-container">
                                       <div class="pbmit-featured-wrapper">
                                          <img src="{{ asset('assets/images/blog/blog-01.jpg') }}" class="img-fluid" alt="blog" />
                                       </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                       <div class="pbmit-meta-container">
                                          <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                             <i class="pbmit-base-icon-calendar-2"></i> Jun 03, 2020
                                          </div>
                                          <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                             <div class="pbmit-meta-category">
                                                <i class="pbmit-base-icon-folder-open-empty"></i>
                                                <a href="#" rel="category tag">Heath Care</a>
                                             </div>
                                          </div>
                                       </div>
                                       <h3 class="pbmit-post-title"><a href="blog-details.html">How to handle patient body in MRI</a></h3>
                                       <div class="pbminfotech-box-desc">
                                          <div class="pbminfotech-box-desc-text">
                                             We are provide excellent medical advices for your good health and we…
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="col-md-6">
                              <article class="pbmit-blog-style-1 heath-care pbmit-odd pbmit-col-odd">
                                 <div class="post-item">
                                    <div class="pbmit-featured-container">
                                       <div class="pbmit-featured-wrapper">
                                          <img  src="{{ asset('assets/images/blog/blog-02.jpg') }}" class="img-fluid" alt="blog" />
                                       </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                       <div class="pbmit-meta-container">
                                          <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                             <i class="pbmit-base-icon-calendar-2"></i> Jun 03, 2020
                                          </div>
                                          <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                             <div class="pbmit-meta-category">
                                                <i class="pbmit-base-icon-folder-open-empty"></i>
                                                <a href="blog-details.html" rel="category tag">Surgery</a>
                                             </div>
                                          </div>
                                       </div>
                                       <h3 class="pbmit-post-title"><a href="blog-details.html">Diabetes & blood pressor check up</a></h3>
                                       <div class="pbminfotech-box-desc">
                                          <div class="pbminfotech-box-desc-text">
                                             We are provide excellent medical advices for your good health and we…
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <article class="pbmit-blog-style-2 col-md-12 medical pbmit-odd pbmit-col-odd">
                           <div class="post-item">
                              <div class="pbminfotech-box-content">
                                 <div class="pbmit-meta-container">
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                       <i class="pbmit-base-icon-calendar-2"></i> May 08, 2019
                                    </div>
                                    <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                       <div class="pbmit-meta-category">
                                          <i class="pbmit-base-icon-folder-open-empty"></i>
                                          <a href="blog-details.html" rel="category tag">Medical</a>
                                       </div>
                                    </div>
                                 </div>
                                 <h3 class="pbmit-post-title"><a href="blog-details.html">Multi super doctors and kind behavior</a></h3>
                              </div>
                           </div>
                        </article>
                        <article class="pbmit-blog-style-2 col-md-12 medical pbmit-odd pbmit-col-odd">
                           <div class="post-item">
                              <div class="pbminfotech-box-content">
                                 <div class="pbmit-meta-container">
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                       <i class="pbmit-base-icon-calendar-2"></i> Jun 10, 2019
                                    </div>
                                    <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                       <div class="pbmit-meta-category">
                                          <i class="pbmit-base-icon-folder-open-empty"></i>
                                          <a href="blog-details.html" rel="category tag">Professional</a>
                                       </div>
                                    </div>
                                 </div>
                                 <h3 class="pbmit-post-title"><a href="blog-details.html">For Treatment: Research and Analysis</a></h3>
                              </div>
                           </div>
                        </article>
                        <article class="pbmit-blog-style-2 col-md-12 medical pbmit-odd pbmit-col-odd">
                           <div class="post-item">
                              <div class="pbminfotech-box-content">
                                 <div class="pbmit-meta-container">
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                       <i class="pbmit-base-icon-calendar-2"></i> Jun 18, 2019
                                    </div>
                                    <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                       <div class="pbmit-meta-category">
                                          <i class="pbmit-base-icon-folder-open-empty"></i>
                                          <a href="blog-details.html" rel="category tag">Heath Care</a>
                                       </div>
                                    </div>
                                 </div>
                                 <h3 class="pbmit-post-title"><a href="blog-details.html">Get the Home care and nursing service</a> </h3>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section> -->
   <!-- Blog End -->

</div>
<!-- page content End -->

@endsection