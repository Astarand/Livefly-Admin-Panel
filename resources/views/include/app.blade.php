<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <!-- Title -->
   <title>@yield('title', 'Livefly Healthcare - Trusted Home Nursing, Therapy, and Health Tests')</title>
   <meta name="robots" content="noindex, follow" />
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

   <!-- canonicals -->
   <link rel="canonical" href="@yield('canonical_url', url()->current())">

   <meta name="description" content="@yield('meta_description', 'Livefly Healthcare offers 24/7 home nursing, ICU care, physiotherapy, health tests, and telemedicine services in Kolkata. Personalized, compassionate care tailored to your needs. Book now for quality healthcare at home!')">
   <meta name="keywords" content="@yield('keywords', 'Livefly Healthcare, home nursing care, critical care nursing, physiotherapy services, health tests at home, telemedicine services, hospice care, senior citizen care, home healthcare Kolkata, bedside nursing, palliative care solutions')">


   <meta property="og:title" content="Livefly Healthcare - Trusted Home Nursing, Rehabilitation, and Health Services" />
   <meta property="og:description" content="Discover personalized home healthcare services from Livefly Healthcare, including ICU care, physiotherapy, health tests, telemedicine, and senior citizen care. Contact us for compassionate care tailored to your needs." />
   <meta property="og:url" content="https://www.liveflyhealthcare.com/services" />
   <meta property="og:type" content="website" />
   <meta property="og:image" content="https://www.liveflyhealthcare.com/assets/images/og-image.jpg" />
   <meta property="og:image:alt" content="Livefly Healthcare services - Home nursing, health tests, physiotherapy, and more" />
   <meta property="og:image:width" content="200" />
   <meta property="og:image:height" content="200" />



   <!-- CSS============================================ -->

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <!-- Fontawesome -->
   <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
   <!-- Flaticon -->
   <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
   <!-- Doctery Icons -->
   <link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}">
   <!-- Themify Icons -->
   <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
   <!-- Slick -->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <!-- Magnific -->
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
   <!-- AOS -->
   <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
   <!-- Shortcode CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/shortcode.css') }}">
   <!-- Base CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
   <!-- REVOLUTION STYLE SHEETS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/rs6.css') }}">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
   <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-NZLV6VHR');</script>
   <!-- End Google Tag Manager -->
     <script async src="https://www.google-analytics.com/analytics.js"></script>

     <!-- Meta Pixel Code -->
      <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '260271330163452');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=260271330163452&ev=PageView&noscript=1"
      /></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>
   <!-- page wrapper -->
   <div class="page-wrapper">
      @include('include.header')

      @yield('content')

      @include('include.footer')

   </div>

   <!-- page wrapper End -->

   <!-- JS
         ============================================ -->
   <!-- jQuery JS -->
   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <!-- Popper JS -->
   <script src="{{ asset('assets/js/popper.min.js') }}"></script>
   <!-- Bootstrap JS -->
   <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   <!-- jquery Waypoints JS -->
   <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
   <!-- jquery Appear JS -->
   <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
   <!-- Numinate JS -->
   <script src="{{ asset('assets/js/numinate.min.js') }}"></script>
   <!-- Slick JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <!-- Magnific JS -->
   <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Circle Progress JS -->
   <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
   <!-- AOS -->
   <script src="{{ asset('assets/js/aos.js') }}"></script>
   <!-- Scripts JS -->
   <script src="{{ asset('assets/js/scripts.js') }}"></script>
   <!-- Revolution JS -->
   <script src="{{ asset('assets/revolution/rslider.js') }}"></script>
   <script src="{{ asset('assets/revolution/rbtools.min.js') }}"></script>
   <script src="{{ asset('assets/revolution/rs6.min.js') }}"></script>

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZLV6VHR"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-FPHED115S4"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-FPHED115S4');
   </script>
   <script type="text/javascript">-
      (function(c,l,a,r,i,t,y){
         c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
         t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
         y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "ph1xpdq87l");
   </script>


   <script>
      $('.portfolio-menu ul li').click(function() {
         $('.portfolio-menu ul li').removeClass('active');
         $(this).addClass('active');

         var selector = $(this).attr('data-filter');
         $('.portfolio-item').isotope({
            filter: selector
         });
         return false;
      });
      $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
            type: 'image',
            gallery: {
               enabled: true
            }
         });
      });
   </script>
</body>

</html>