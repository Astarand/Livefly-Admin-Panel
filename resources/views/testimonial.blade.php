@extends('include.app')

@section('title', 'Testimonials - Livefly Healthcare | Hear from Our Happy Clients')
@section('meta_description', 'Read testimonials from our satisfied clients who have experienced Livefly Healthcare’s compassionate and professional home healthcare services.')
@section('keywords', 'Livefly Healthcare testimonials, client feedback, healthcare reviews, patient testimonials, home healthcare experiences, nursing care reviews, Kolkata healthcare testimonials')

<style>
    .play-icon {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        color: white;
        opacity: 0.8;
        transition: opacity 0.3s;
    }

    .card:hover .play-icon {
        opacity: 1;
    }

    .play-icon i {
        background: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        padding: 15px;
    }
</style>
@section('content')

<!-- Testimonial Start -->
<section class="section-lg home2-testimonial-section-bg">
    <div class="home2-testimonial-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7">
                    <div class="pbmit-heading-subheading text-left">
                        <h4 class="pbmit-subtitle"> Testimonials</h4>
                        <h2 class="pbmit-title text-white mb-4"> What people say about Livefly Homecare</h2>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="pbminfotech-ele-fid-style-3 pbmit-global-color p-0 mb-4 mb-md-0">
                        <div class="pbmit-fld-contents">
                            <div class="pbmit-circle-outer" data-id="120" data-digit="98" data-fill="#1bbde4" data-emptyfill="rgba(27,189,228,0.10)" data-before="" data-after="<sup>%</sup>" data-thickness="3">
                                <div class="d-flex align-items-center justify-content-end">
                                    <!-- <div class="pbmit-circle">
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="98" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">98</span><span class="pbmit-fid-sub"><sup>%</sup></span>
                                        </h4>
                                    </div> -->
                                    <div class="pbmit-circle-inner">
                                        <img src="{{ asset('assets/images/rating.png') }}" alt="rating" style="width:200px; margin-right:40px;" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-md-12 col-lg-12 g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-4 col-lg-4 col-sm-12">
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
                                        <div>My experience with this Healthcare provider is excellent. I am receiving regular services with deputation of experienced nurses, equipment providers (with its maintenance), valuable advice, etc. Thus my life span is energized from 82+ years. I am thankful to this elite agency. Wish them a brighter future.</div>
                                    </blockquote>
                                </div>
                                <div class="pbminfotech-author-wrapper d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="pbminfotech-box-title">Sasanka Bhowmik</h3>
                                        <div class="pbminfotech-testimonial-detail">Patient's Family</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset ('assets/images/team1.png') }}" alt="Sasanka Bhowmik" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <article class="pbmit-testimonial-style-2 pbmit-odd pbmit-col-odd">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-desc">
                                    <div class="pbminfotech-box-star-ratings">
                                        <i class="pbmit-base-icon-star pbmit-active"></i>
                                        <i class="pbmit-base-icon-star pbmit-active"></i>
                                        <i class="pbmit-base-icon-star pbmit-active"></i>
                                        <i class="pbmit-base-icon-star pbmit-active"></i>
                                        <i class="pbmit-base-icon-star"></i>
                                    </div>
                                    <blockquote class="pbminfotech-testimonial-text my-3">
                                        <div>Quite helpful resources from Livefly team. Their services from start till the end have been good. Would surely recommend this to anyone who has home care needs for any patient. The only catch is one needs to be financially strong to afford these services for a longer period.</div>
                                    </blockquote>
                                </div>
                                <div class="pbminfotech-author-wrapper d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="pbminfotech-box-title">Arindam Sarkar</h3>
                                        <div class="pbminfotech-testimonial-detail">Patient's Family</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset ('assets/images/team1.png') }}" alt="Arindam Sarkar" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4 col-lg-4 col-sm-12">
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
                                    <blockquote class="pbminfotech-testimonial-text my-3">
                                        <div>Very professional & prompt service! They have very good trained staff. Have been using their services for my dad, and all the male nurses were very professional & good! There have been no missed days of service, and the center keeps following up on the staff and the services!</div>
                                    </blockquote>
                                </div>
                                <div class="pbminfotech-author-wrapper d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="pbminfotech-box-title">Seema Minhaz</h3>
                                        <div class="pbminfotech-testimonial-detail">Patient's Family</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset ('assets/images/team1.png') }}" alt="Seema Minhaz" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Testimonial 4 -->
                <div class="col-md-4 col-lg-4 col-sm-12">
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
                                        <div>We used 3 male attendants from Livefly. They were all well-trained (two had earned as OT technicians, and one was a qualified GNM). They were respectful and good at following instructions. They all had a tendency to become engrossed in their mobile phones, so sometimes had to be called several times before responding, but other than that, they were very good.</div>
                                    </blockquote>
                                </div>
                                <div class="pbminfotech-author-wrapper d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="pbminfotech-box-title">Ranjan RC</h3>
                                        <div class="pbminfotech-testimonial-detail">Patient's Family</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset ('assets/images/team1.png') }}" alt="Ranjan RC" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Testimonial 5 -->
                <div class="col-md-4 col-lg-4 col-sm-12">
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
                                    <blockquote class="pbminfotech-testimonial-text my-3">
                                        <div>I am absolutely satisfied with the service of Livefly Healthcare. What makes me happier is that they work with a well-trained staff. My father had right TKR a few months ago. I am very much glad to say that the physiotherapist is doing a wonderful job, which helps my father to mobilize completely. Thank you so much.</div>
                                    </blockquote>
                                </div>
                                <div class="pbminfotech-author-wrapper d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="pbminfotech-box-title">Sinchan Das</h3>
                                        <div class="pbminfotech-testimonial-detail">Patient's Family</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset ('assets/images/team1.png') }}" alt="Sinchan Das" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Testimonial 6 -->
                <div class="col-md-4 col-lg-4 col-sm-12">
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
                                    <blockquote class="pbminfotech-testimonial-text my-5">
                                        <div>Your supports are excellent. The technical supervisor and nurse both are excellent in support and behavior. They also have excellent knowledge about good nursing support for critical patients.</div>
                                    </blockquote>
                                </div>
                                <div class="pbminfotech-author-wrapper d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="pbminfotech-box-title">Subrata Sarkar</h3>
                                        <div class="pbminfotech-testimonial-detail">Patient's Family</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset ('assets/images/team1.png') }}" alt="Subrata Sarkar" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </div>
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


<section class="home2-client-section">
    <div class="container">
        <div class="row g-4">
            <!-- First Video -->
            <div class="col-md-4">
                <div class="card position-relative">
                    <a href="https://www.youtube.com/watch?v=UNl1S9UkDXQ" class="pbmin-lightbox-video">
                        <img src="https://img.youtube.com/vi/UNl1S9UkDXQ/hqdefault.jpg" class="card-img-top img-fluid" alt="Home Nursing Services">
                        <div class="play-icon position-absolute">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Second Video -->
            <div class="col-md-4">
                <div class="card position-relative">
                    <a href="https://www.youtube.com/watch?v=iVIhvKgoEMw" class="pbmin-lightbox-video">
                        <img src="https://img.youtube.com/vi/iVIhvKgoEMw/hqdefault.jpg" class="card-img-top img-fluid" alt="Sarod Prate Agomonir Alo - Event">
                        <div class="play-icon position-absolute">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Third Video -->
            <div class="col-md-4">
                <div class="card position-relative">
                    <a href="https://www.youtube.com/watch?v=5ylcQSIyuU8" class="pbmin-lightbox-video">
                        <img src="https://img.youtube.com/vi/5ylcQSIyuU8/hqdefault.jpg" class="card-img-top img-fluid" alt="Sarod Prate Agomonir Alo">
                        <div class="play-icon position-absolute">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection