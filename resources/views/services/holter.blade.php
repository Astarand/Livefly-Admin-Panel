@extends('include.app')

@section('title', 'Holter Monitoring - Livefly Healthcare | Continuous Heart Monitoring at Home')
@section('meta_description', 'Monitor your heart health with Livefly Healthcare’s Holter Monitoring services. Get continuous, accurate ECG tracking at home for effective cardiac care.')
@section('keywords', 'Holter Monitoring, heart monitoring, continuous ECG monitoring, cardiac care, home heart monitoring, Livefly Healthcare services, Kolkata healthcare diagnostics')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
   <div class="container">
      <div class="pbmit-title-bar-content">
         <div class="pbmit-title-bar-content-inner">
            <div class="pbmit-tbar">
               <div class="pbmit-tbar-inner container">
                  <h1 class="pbmit-tbar-title">Holter</h1>
               </div>
            </div>
            <div class="pbmit-breadcrumb">
               <div class="pbmit-breadcrumb-inner">
                  <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><a title="" href="{{ route('health-tests') }}" class="home"><span>Health Tests</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><span class="post-root post post-post current-item">Holter</span></span>
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
                  <h2 class="pbmit-title">Holter Monitoring Services For Continuous Heart Tracking</h2>
                  <p>A Holter monitor is a 24 to48 hour continuous recording of an electrocardiogram (ECG) used for evaluating heart rhythm abnormalities. As Rightangled — CareWrx UK, we provide you with the ability to take a test from your own home that is completely non-invasive (similar to an ECG) and captures extensive information about the hearts electrical activity during normal daily activities.</p>

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
                                    <h2 class="pbmit-element-title">24/48-Hour Monitoring</h2>
                                    <div class="pbmit-heading-desc">Holds extended heart statistics of the cycle for a day or two, which can cooperate with decisive gentle and rare rhythms over more than that extent of time.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Non-Invasive</h2>
                                    <div class="pbmit-heading-desc">The Holter monitor is a portable, wearable device which can worn during normal daily activities.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Continuous Cardiovascular Data</h2>
                                    <div class="pbmit-heading-desc"> Following all heartbeats, this monitoring device extends beyond the big picture of pulsingZsasso providing a new layer to track cardiovascular rhythm and activity in its entirety.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Precise Diagnosis</h2>
                                    <div class="pbmit-heading-desc">The regular data collection improves the ability to find and identify brief cardiac abnormalities (such as trachyarrythmia)</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Event Marker</h2>
                                    <div class="pbmit-heading-desc">A button that is pressed by the patient when they feel symptoms so as to correlate them with recorded heart activity.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Ambulatory Use</h2>
                                    <div class="pbmit-heading-desc">True Ambulatory Use depends on Real World environment to reflect actual heart functioning in a typical case.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <h2 class="pbmit-title ">Why Choose Us</h2>
                     <p>We are excited to announce our new LiveFly Healthcare Holter Monitoring services and the comprehensive delivery of intelligent cardiac care right in your home. We have a team of experienced professionals who specialize in accurate, and personalized assessment for heart-related- issues.</p>
                     <div class="col-md-6 col-sm-12">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Diagnosing arrhythmias
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Evaluating unexplained palpitations
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Monitoring treatment efficacy for heart conditions
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Investigating syncope (fainting)
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Assessing heart function after a heart attack
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Diagnosing silent ischemia
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Evaluating heart rate variability
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Monitoring heart activity during medication changes
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Assessing pacemaker function
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Screening for congenital heart conditions
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
                           <span>01.</span> How does a Holter Monitor differ from a standard ECG?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                           <p>
                              Unlike a standard ECG, which provides a snapshot of heart activity, a Holter Monitor records continuously over an extended period, capturing intermittent issues.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <span>02.</span> Is the Holter Monitor comfortable to wear?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Yes, the Holter Monitor is designed to be lightweight and portable, allowing you to carry on with your daily activities comfortably.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>03.</span> What should I do if I experience symptoms while wearing the Holter Monitor?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              If you experience symptoms, press the event marker button on the device to record the time. This helps correlate symptoms with heart activity.
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