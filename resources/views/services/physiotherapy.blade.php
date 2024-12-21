@extends('include.app')

@section('title', 'Physiotherapy - Livefly Healthcare | Expert Rehabilitation at Home')
@section('meta_description', 'Recover with Livefly Healthcare’s professional physiotherapy services at home. Personalized rehabilitation plans to restore mobility and improve overall well-being.')
@section('keywords', 'Physiotherapy, home physiotherapy, rehabilitation services, physiotherapy at home, Livefly Healthcare, mobility recovery, Kolkata healthcare services')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
   <div class="container">
      <div class="pbmit-title-bar-content">
         <div class="pbmit-title-bar-content-inner">
            <div class="pbmit-tbar">
               <div class="pbmit-tbar-inner container">
                  <h1 class="pbmit-tbar-title">Physiotherapy</h1>
               </div>
            </div>
            <div class="pbmit-breadcrumb">
               <div class="pbmit-breadcrumb-inner">
                  <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><a title="" href="{{ route('rehabilitation-therapies') }}" class="home"><span>Rehabilitation Therapies</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><span class="post-root post post-post current-item">Physiotherapy</span></span>
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
                  <h2 class="pbmit-title">Refresh Yourself with Professional Physiotherapy</h2>
                  <p>The major goals of physiotherapy, directly and indirectly, are oriented to improving physical functioning and mobility through correctly indicated exercises, manual therapy, and rehabilitation techniques. Our highly professional therapists are oriented toward the relief of pain, gain of strength, and promotion of general health while delivering fully personalized care in the sphere of recovery from injury, surgery rehabilitation, and management of chronic conditions of different kinds.</p>

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
                                    <h2 class="pbmit-element-title"> Individual Treatment Programs</h2>
                                    <div class="pbmit-heading-desc">Custom exercise programs tailored to individual needs for optimal recovery and improved health.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Pain Management</h2>
                                    <div class="pbmit-heading-desc">Methods of reducing pain and enhancing comfort during the healing process.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Manual Therapy</h2>
                                    <div class="pbmit-heading-desc">Manual techniques that improve joint and muscle motion to enhance the healing process.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Rehabilitation Exercises</h2>
                                    <div class="pbmit-heading-desc">A series of special exercises conducted to regain strength, flexibility, and mobility after an injury or surgery.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Chronic Condition Management</h2>
                                    <div class="pbmit-heading-desc">The provision of ongoing care and exercises to help manage chronic health conditions effectively.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Holistic Approach</h2>
                                    <div class="pbmit-heading-desc">It is a comprehensive form of care that deals with the aspects pertaining to physical, emotional, and functional health for complete well-being.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <h2 class="pbmit-title ">Why Choose Us</h2>
                     <p>LiveFly Healthcare is delighted to introduce our extensive range of Physiotherapy Services, bringing expert care directly to the comfort of your home. Our team of highly skilled physiotherapists is dedicated to providing specialized and personalized treatments for a wide array of conditions.</p>
                     <div class="col-md-6 col-sm-12">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Orthopedic Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Sports Physiotherapist / Sports Injury Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Women’s Health Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Pelvic Floor Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Neuro Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Vestibular Physiotherapist / Vertigo Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Concussion / TBI Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Hand Physiotherapy
                              </li>


                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Shoulder Pain Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> ICU Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Online Physiotherapy / Virtual Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Mobile Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Back Pain Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Knee Pain Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Geriatric Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Musculoskeletal Physiotherapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Rehab Consultant
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Foot Pain Physiotherapy
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 order-2 order-4 order-lg-4">
               <div class="">
                  <h2 class="pbmit-title ">Frequently Asked Questions</h2>
               </div>
               <div class="accordion mb-5" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <span>01.</span> What is physiotherapy and how can it help me?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                           <p>
                              Physiotherapy, also referred to as physical therapy in many parts of the world, is a healthcare profession concerned with assessing, diagnosing and treating a broad range of various musculoskeletal issues. Physiotherapists help people affected by injury, illness or disability through movement and exercise, manual therapy, education and advice. Physiotherapy can also help reduce pain, increase range of motion and physical strength that your body needs to stay healthy.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <span>02.</span> What types of conditions or injuries can physiotherapy help with?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <ul>
                              <li>Back pain, neck pain and other musculoskelatal conditions</li>
                              <li>Common athletic tissues include sprains, strains and tendonitis.</li>
                              <li>Stroke,Multiple Sclerosis,Parkinson's Disease (explains neurological).</li>
                              <li>Pulmonary Reinforcement for COPD and after heart surgery rehab</li>
                              <li>Rehabilitation after surgery of any kind</li>
                              <li>Pediatric disabilities: From developmental delays to congenital defects</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>03.</span> How much time is consumed for physiotherapy treatment?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              How long you will need physiotherapy treatment for depends on your condition, the complexity of that problem and your rehabilitation goals. Then they will determine the depth of continued sessions (a few to chronic, complex issues that may take a couple months). After your initial assessment, the physiotherapist will give you a custom treatment plan and let you know an estimated timeline of how long it should take for recovery. They will run reassessment regularly to track the progress and make changes to plan if needed.
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