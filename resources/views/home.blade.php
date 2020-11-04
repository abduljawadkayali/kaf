<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@lang("Kaf Company")</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="dist/img/logo.jpg" rel="icon">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Serenity - v2.0.0
    * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body style="letter-spacing: 0px!important;">

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">

            <h1 class="text-light"><a href="/">@lang("Kaf Company")</a>
            <img  src="/dist/img/logo.jpg" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>



        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"  aria-expanded="false" role="button" aria-haspopup="true" v-pre>
                        <i class="fas fa-globe"></i> {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a  class="dropdown-item" style="text-align: center!important;" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="contactus">@lang("Contact")</a></li>
                <li><a href="services">@lang("Services")</a></li>
                <li><a href="about">@lang("About Us")</a></li>
                <li class="active"><a href="/">@lang("home")</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
@if($background )
<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('/images/{{ $background->image }}')">
    <div class="hero-container" data-aos="fade-up">
        <h1>{{ __($background->title) ?? ''}}</h1>
        <h2>{{ __($background->body) ?? ''}}</h2>
        @if($background->link )
        <a href="{{ $background->link }}" class="btn-get-started scrollto">{{ __($background->link_title) ?? '' }}</a>
        @endif
    </div>
</section><!-- End Hero -->
@endif
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box py-5">
                                <i class="fas fa-gas-pump"></i>
                                <span data-toggle="counter-up">{{$price->barrelBenzin ?? ''}}</span>
                                <span >@lang("Benzin/br")</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box py-5">
                                <i class="fas fa-oil-can">&nbsp;</i>
                                <span data-toggle="counter-up">{{$price->benzin ?? ''}}</span>
                                <span >@lang("Benzin/lt")</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                                <i class="fas fa-gas-pump"></i>
                                <span data-toggle="counter-up">{{$price->barrelMazot ?? ''}}</span>
                                <span >@lang("Mazot/br")</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                                <i class="fas fa-oil-can">&nbsp;</i>
                                <span data-toggle="counter-up">    {{$price->mazot ?? ''}}</span>
                                <span >   @lang("Mazot/lt")</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline">
                    <img src="dist/img/logo.jpg" class="img-fluid" alt="">
                    <a href="{{$video->link}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content" style="text-align: right">
                    <h3>{{__($video->title)}}</h3>
                    <p class="font-italic">
                        {{__($video->body)}}
                    </p>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>@lang("Contact us")</h3>
                <p> @lang("For More Information Please contact us and get our services")</p>
                <a class="cta-btn" href="contactus">@lang("Contact With Us")</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services  section-bg ">
        <div class="container">

            <div class="section-title pt-5" data-aos="fade-up">
                <h2>@lang("Our Services")</h2>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon">
                            <i class="fas fa-hands-helping" style="color: #d6ff22;"></i></div>
                        <h4 style="text-align: right!important;" class="title"><a href="">{{__($service->title)}}</a></h4>
                        <p style="text-align: right!important;" class="description">{{__($service->body)}}</p>
                    </div>
                </div>
                @endforeach


        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" style="text-align: right; letter-spacing: 0px!important;">
    <div class="footer-top">
        <div class="container">
            <div class="row">



                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>@lang("Useful Links")</h4>
                    <ul>
                        <li><a href="/">@lang("Home")</a></li>
                        <li><a href="about">@lang("About us")</a></li>
                        <li><a href="pricing">@lang("Pricing")</a></li>
                        <li><a href="contactus">@lang("Contact")</a></li>
                        <li><a href="services">@lang("Services")</a></li
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>@lang("Contact Us")</h4>
                    <p>
                        @lang("A108 Adam Street") <br>
                       @lang(" New York, NY 535022")<br>
@lang("United States") <br>
                        <strong>@lang("Phone:")</strong> @lang("+905340199554")<br>
<strong>@lang("Email:")</strong> @lang("info@kafcompany.com")<br>
</p>

<div class="social-links">
<a href="https://wa.me/00905340199554" class="twitter"><i class="icofont-whatsapp"></i></a>
<a href="https://m.facebook.com/kaf.sirketi/" class="facebook"><i class="icofont-facebook"></i></a>
<a href="https://t.me/kaf_sirketi" class="instagram"><i class="icofont-telegram"></i></a>
<a href="mailto:kaf.sirketi@gmail.com" class="google-plus"><i class="icofont-email"></i></a>
</div>

            </div>
<div class="col-lg-4 col-md-6 footer-info" style="letter-spacing: 0px!important;">
<h3 style="text-align: right; letter-spacing: 0px!important;">@lang("Kaf Company")</h3>
<p style="letter-spacing: 0px!important;">@lang("Kaf company is a company for trading Import and export oil")</p>
</div>

</div>
</div>
</div>

<div class="container">
<div class="copyright">
&copy; @lang("Copyright") <strong><span>@lang("Abduljawad Kayali")</span></strong>@lang(". All Rights Reserved")
</div>
<div class="credits">
@lang(" Devloped by")<a href="https://wa.me/00905358840111"; target="_blank" style="text-decoration: underline!important;">@lang("Abduljawad Kayali")</a>
</div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
