@extends('include.app')

@section('title', 'Short Term Nursing - Livefly Healthcare | Temporary Nursing Care at Home')
@section('meta_description', 'Livefly Healthcare offers short-term nursing services for post-surgery recovery, illness management, and temporary medical needs. Professional care delivered at home.')
@section('keywords', 'Short term nursing, temporary nursing care, post-surgery nursing, illness recovery, home nursing services, Livefly Healthcare, Kolkata healthcare')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
   <div class="container">
      <div class="pbmit-title-bar-content">
         <div class="pbmit-title-bar-content-inner">
            <div class="pbmit-tbar">
               <div class="pbmit-tbar-inner container">
                  <h1 class="pbmit-tbar-title">Short term Nursing</h1>
               </div>
            </div>
            <div class="pbmit-breadcrumb">
               <div class="pbmit-breadcrumb-inner">
                  <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><a title="" href="{{ route('nursing-care') }}" class="home"><span>Nursing Care</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><span class="post-root post post-post current-item">Short term Nursing</span></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Title Bar End-->

<div class="page-content">
   <!-- Welcome -->
   <section class="">
      <div class="container">
         <div class="row g-4">
            <div class="col-lg-7 order-1 order-lg-0">
               <div class="service-details">
                  <h2 class="pbmit-title">Flexible Care: Short-Term Nursing Solutions</h2>
                  <p>Our Short-Term Nursing services provide temporary and specialized medical care for patients in need of recovery from surgery, illness or injury. Highly trained and skilled nurses deliver the utmost care, keep a check on health parameters, support in recovery. This service is to meet the individual short-term requirements are provides quality care with an appropriate transition back into daily life.</p>
               </div>
            </div>
            <x-service-booking />
         </div>
      </div>
   </section>
   <!-- Welcome end -->

   <!-- Service -->
   <section class="section-lgx p-0">
      <div class="container">
         <div class="row">
            <x-service-sidebar />
            <div class="col-lg-8 service-right-col order-2 order-lg-3">
               <div class="service-details">
                  <div class="service-page-infobox">
                     <div class="row">
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Post-Surgical Care</h2>
                                    <div class="pbmit-heading-desc">Our nurses render necessary care in monitoring pain, tracking the healing process of wounds, and providing support in the recovery phase of surgery.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Illness Recovery Support</h2>
                                    <div class="pbmit-heading-desc">We offer comprehensive care that enables patients to recover from acute sickness by managing symptoms and decreasing suffering.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Personal Care Plans</h2>
                                    <div class="pbmit-heading-desc"> Each patient has an individual care plan developed based on his health conditions and recovery goals.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Health Monitoring</h2>
                                    <div class="pbmit-heading-desc">Closely monitoring vital signs and general health enables appropriate intervention and adjustments to the care plan, if necessary.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Medication Management</h2>
                                    <div class="pbmit-heading-desc">We assist with schedules and administrations of medication and ensure medications are taken correctly for proper adherence and effectiveness in treatment.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Flexible Care</h2>
                                    <div class="pbmit-heading-desc">Our Short-Term Nursing services provide temporary and specialized medical care for patients in need of recovery from surgery, illness or injury. Highly trained and skilled nurses deliver the utmost care, keep a check on health parameters, support in recovery. This service is to meet the individual short-term requirements and provide quality care with an appropriate transition back into daily life.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <h2 class="pbmit-title ">Why Choose Us</h2>
                     <p>LiveFly Healthcare is pleased to offer you our comprehensive package of Short-Term Nursing services, bringing comprehensive care right to the comfort of your home. Our highly skilled nursing team will provide specialized, individualized care for a range of short-term health needs.</p>
                     <div class="col-md-6 col-sm-12">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Post-surgical wound care
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Symptom management
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> IV therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Pain management
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Physical therapy support
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Medication administration
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Vital signs monitoring
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Dietary assistance
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Mobility support
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Personal hygiene assistance
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 order-4 order-lg-4">
               <div class="">
                  <h2 class="pbmit-title ">Frequently Asked Questions</h2>
               </div>
               <div class="accordion mb-5" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <span>01.</span> What is Short-Term Nursing?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                           <p>
                              Short-Term Nursing provides temporary, specialized care for patients recovering from surgery, illness, or injury, focusing on managing health and supporting recovery.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <span>02.</span> How long can Short-Term Nursing services be provided?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>The duration of Short-Term Nursing services varies based on individual needs and recovery goals, typically ranging from a few days to several weeks.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>03.</span> Can Short-Term Nursing be provided at home?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              Yes, Short-Term Nursing services can be delivered at home, allowing for personalized care in a comfortable environment.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Service End -->
</div>

@endsection