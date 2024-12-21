@extends('include.app')

@section('title', 'Clinical Attendant/Bedside Attendant - Livefly Healthcare | Compassionate Patient Care')
@section('meta_description', 'Livefly Healthcare provides skilled Clinical Attendants and Bedside Attendants for personalized patient care. Reliable support for daily activities and medical assistance at home.')
@section('keywords', 'Clinical Attendant services, Bedside Attendant, patient care at home, home healthcare attendants, Livefly Healthcare services, daily healthcare support, Kolkata home care services')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
   <div class="container">
      <div class="pbmit-title-bar-content">
         <div class="pbmit-title-bar-content-inner">
            <div class="pbmit-tbar">
               <div class="pbmit-tbar-inner container">
                  <h1 class="pbmit-tbar-title">Clinical Attendant/Bedside Attendant</h1>
               </div>
            </div>
            <div class="pbmit-breadcrumb">
               <div class="pbmit-breadcrumb-inner">
                  <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><a title="" href="{{ route('nursing-care') }}" class="home"><span>Nursing Care</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><span class="post-root post post-post current-item">Clinical Attendant/Bedside Attendant</span></span>
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
                  <h2 class="pbmit-title">Reliable Support: Clinical and Bedside Attendant Services</h2>
                  <p>LiveFly Healthcare takes pride in introducing our Critical Care Nursing Services, bringing advanced medical care to the comfort of your home. Our dedicated team of highly skilled critical care nurses is committed to providing comprehensive and specialized care for individuals requiring intensive medical attention.</p>
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
                                    <h2 class="pbmit-element-title">Daily Living Assistance</h2>
                                    <div class="pbmit-heading-desc">> Attendees help patients in daily activities such as personal grooming, feeding and even providing continence of the people giving them a level of comfort with dignity to be able to dignify end days at home.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Health Monitoring</h2>
                                    <div class="pbmit-heading-desc">Monitor vital signs and indicators of health on a regular basis to catch problems early enough for quick security responses.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Emotional and Companionship Support</h2>
                                    <div class="pbmit-heading-desc">Conversing with the elderly, giving them company or just providing emotional support to their mental health can help reducing loneliness.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Medication Assistance</h2>
                                    <div class="pbmit-heading-desc">Ensuring administers give patients the right medication at the designated time by helping them remember, and to perform accurate administration.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Individualized assistance</h2>
                                    <div class="pbmit-heading-desc">Creating a holistic approach based on the circumstances and characteristics of every patient, offering personalized help to meet his or her requirements.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Reliable Support </h2>
                                    <div class="pbmit-heading-desc">The paragraph is dedicated to Critical Care Nursing Service.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <h2 class="pbmit-title ">Why Choose Us</h2>
                     <p>LiveFly Healthcare is happy to bring you our comprehensive services with a clinical attendant and bedside attendant, with expert delivery of health care right at home. With a sensitive team, we provide personalized care and support to meet each of your needs, in regard to your clinical and bedside care requirements.</p>
                     <div class="col-md-6 col-sm-12">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Vital Parameter’s Monitoring
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> CBG Monitoring and Insulin Administration
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Patient Hygiene Maintenance
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Bed Making
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Back Care and Position Change
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Helping For Patient Mobilization
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Nebulization
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Medication Administration
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Catheterization
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Oxygen Administration
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Wound Dressing
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Inhaler Therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Suction Procedure
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Ryles Tube Feeding/Insertion
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Peg Tube Feeding/Dressing
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Bipap/C-Pap Handling
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Ventilator Handling (NIV)
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> ECG
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Basic Life Support (Emergency Support)
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
                           <span>01.</span> Explain what a Clinical/Bedside Attendant is?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                           <p>
                              The clinical and bedside attendants who help patients do things, keep them healthy [e..g., taking blood pressure], give out meds and more.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <span>02.</span> Can they be provided at home and/or in Healthcare Facilities?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>These services can have happen both either : Home or Health Care facilities based on requirements from the patient side.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>03.</span> What qualifications do Clinical/Bedside Attendants have?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              Attendants trained and vetted professionals who have experience in providing care to patients, commonly holding basic nursing or caregiving certificates.
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