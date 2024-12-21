@extends('include.app')

@section('title', 'Speech & Swallow Therapy - Livefly Healthcare | Specialized Home-Based Care')
@section('meta_description', 'Improve speech and swallowing abilities with Livefly Healthcare’s expert therapy services. Personalized care for individuals recovering from speech and swallowing disorders.')
@section('keywords', 'Speech therapy, swallow therapy, speech and swallow therapy, home therapy services, Livefly Healthcare, speech disorder care, swallowing disorder therapy, Kolkata healthcare services')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
   <div class="container">
      <div class="pbmit-title-bar-content">
         <div class="pbmit-title-bar-content-inner">
            <div class="pbmit-tbar">
               <div class="pbmit-tbar-inner container">
                  <h1 class="pbmit-tbar-title">Speech & Swallow therapy</h1>
               </div>
            </div>
            <div class="pbmit-breadcrumb">
               <div class="pbmit-breadcrumb-inner">
                  <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><a title="" href="{{ route('rehabilitation-therapies') }}" class="home"><span>Rehabilitation Therapies</span></a></span>
                  <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                  <span><span class="post-root post post-post current-item">Speech & Swallow therapy</span></span>
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
                  <h2 class="pbmit-title">Make Your Communication Flourish: Speech and Swallow Therapy Specialist</h2>
                  <p>Our Speech & Swallow Therapy is the appropriate place for individually tailored care to improve one's communications and safe swallowing. Every client is assessed, diagnosed, and offered innovative treatments tailored to help clients overcome speech disorders, enhancing fluency, and regaining confidence. Guided by a compassionate approach, we focus on measurable progress and bettering quality of life.</p>

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
                                    <h2 class="pbmit-element-title">Personalized Assessments</h2>
                                    <div class="pbmit-heading-desc">Personalized evaluations are performed to identify speech and/or swallowing issues and to ensure appropriate therapy for optimal outcomes.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Individualized Treatment Plans</h2>
                                    <div class="pbmit-heading-desc">Individualized treatment strategies that address special needs and goals, increasing its effectiveness and the engagement of clients.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Innovative Methodologies</h2>
                                    <div class="pbmit-heading-desc">Manual techniques that improve joint and muscle motion to enhance the healing process.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Experienced Therapists</h2>
                                    <div class="pbmit-heading-desc">Highly trained professionals with expertise in treating various speech and swallowing disorders.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Progress Tracking</h2>
                                    <div class="pbmit-heading-desc">Monitoring and documenting a client's changes for the modification of therapy plans in ensuring continued upward progress.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="pbmit-ihbox pbmit-ihbox-style-3">
                              <div class="d-flex">
                                 <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Family Involvement</h2>
                                    <div class="pbmit-heading-desc">Engagement of family members in therapy sessions to help support and practice techniques at home.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <h2 class="pbmit-title ">Why Choose Us</h2>
                     <p>LiveFly Healthcare feels proud to offer a comprehensive package in Speech & Swallow Therapy, with the highest expertise delivered right at the comfort of your home. Our experienced team has in mind one thing: highly skilled therapies with specialized, personalized treatments for a plethora of speech and swallow conditions.</p>
                     <div class="col-md-6 col-sm-12">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Articulation therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Language therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Fluency therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Voice therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Swallowing exercises
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="pb-sm-3">
                           <ul class="list-group list-group-borderless">
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Oral motor therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Cognitive-communication therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Augmentative and alternative communication (AAC)
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Feeding therapy
                              </li>
                              <li class="list-group-item">
                                 <i class="pbmit-doctery-icon-approved-signal"></i> Sensory integration therapy
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
                           <span>01.</span> What types of conditions can Speech & Swallow Therapy treat?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                           <p>
                              Our speech therapy addresses a myriad of conditions, from speech delays to stuttering, voice disorders, dysphagia, and cognitive-communication problems.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <span>02.</span> How long does therapy usually take?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p> Well, again that depends on individual needs and goals. Therapy may last from some weeks to several months.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <span>03.</span> Do you treat children and adults?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>
                              Yes, we provide speech and swallow therapy services for children and adults to meet the needs of the two age groups.
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