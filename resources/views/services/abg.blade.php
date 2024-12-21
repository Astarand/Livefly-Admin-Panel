@extends('include.app')

@section('title', 'Arterial Blood Gas Analysis (ABG) - Livefly Healthcare | Accurate Diagnostic Services')
@section('meta_description', 'Get precise Arterial Blood Gas Analysis (ABG) services at home with Livefly Healthcare. Expert diagnostics to assess oxygen levels, pH balance, and overall lung function.')
@section('keywords', 'Arterial Blood Gas Analysis, ABG test, home ABG services, Livefly Healthcare ABG, oxygen level testing, pH balance analysis, diagnostic services, Kolkata healthcare diagnostics')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
   <div class="container">
      <div class="pbmit-title-bar-content">
         <div class="pbmit-title-bar-content-inner">
            <div class="pbmit-tbar">
               <div class="pbmit-tbar-inner container">
                  <h1 class="pbmit-tbar-title">Arterial blood gas analysis (ABG)</h1>
               </div>
            </div>
            <div class="pbmit-breadcrumb">
               <div class="pbmit-breadcrumb-inner">
                  <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><a title="" href="{{ route('health-tests') }}" class="home"><span>Health Tests</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><span class="post-root post post-post current-item">Arterial blood gas analysis (ABG)</span></span>
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
                  <h2 class="pbmit-title">Precise Insights: Arterial Blood Gas Analysis</h2>
                  <p>Arterial Blood Gas (ABG) Analysis—A test to measure levels of oxygen, carbon dioxide and pH in the blood This information is essential for assessing respiratory and metabolic function in a wide range of disease conditions, including but not limited to diagnosis or management related to: Respiratory failure Metabolic imbalance Chronic lung diseases.</p>

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
                                    <h2 class="pbmit-element-title">Oxygen and Carbon Dioxide Levels</h2>
                                    <div class="pbmit-heading-desc">ABG analysis assesses these levels, thereby indicating the amount of oxygen that is being effectively delivered and carbon dioxide cleared.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">pH Measurement</h2>
                                    <div class="pbmit-heading-desc">It measures the blood pH to identify whether the patient has acidosis or alkalosis; therefore, this shows metabolic or respiratory problems respectively.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Bicarbonate Levels</h2>
                                    <div class="pbmit-heading-desc">It helps outline the metabolic component of the acid-base balance through measurement of bicarbonate levels in the patient.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Results Guiding Treatment Decisions</h2>
                                    <div class="pbmit-heading-desc">These results may guide doctors to make an adjustment to treatments such as ventilator settings or any drugs on what the patient needs.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Lactate Levels</h2>
                                    <div class="pbmit-heading-desc">The measurement of lactate will help in monitoring tissue hypoxia and diagnosing other pathologies such as sepsis or shock.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Immediate Results</h2>
                                    <div class="pbmit-heading-desc">The test is instant; thus, very effective in acute medical situations requiring rapid interventions.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <h2 class="pbmit-title ">Why Choose Us</h2>
                     <p>LiveFly Healthcare is proud to bring our comprehensive package on ABG Analysis right into the comfort of your homes. We have a very highly professionalized team that ensures all is given expert and bespoke care in the assessment of a wide array of respiratory and metabolic disorders.</p>
                     <div class="col-md-6 col-sm-12">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Assessing respiratory function
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Diagnosing respiratory acidosis or alkalosis
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Evaluating metabolic acidosis or alkalosis
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Monitoring chronic lung diseases
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Managing critical illnesses
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Evaluating effectiveness of ventilator support
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Assessing oxygen therapy needs
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Diagnosing metabolic imbalances
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Monitoring patients in intensive care
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Guiding emergency treatments
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12  order-4 order-lg-4">
               <div class="">
                  <h2 class="pbmit-title ">Frequently Asked Questions</h2>
               </div>
               <div class="accordion mb-5" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <span>01.</span> What is Arterial Blood Gas (ABG) Analysis?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                           <p>
                              ABG Analysis measures levels of oxygen, carbon dioxide, and pH in the blood to evaluate respiratory and metabolic functions.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <span>02.</span> Why is ABG Analysis important?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p> It provides critical information about respiratory and metabolic status, helping diagnose conditions like respiratory failure and metabolic imbalances.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>03.</span> How quickly will I get results from an ABG test?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              Results are typically available within minutes, allowing for prompt diagnosis and treatment in critical situations.
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