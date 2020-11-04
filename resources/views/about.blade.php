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
                <img src="/dist/img/logo.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <li class="active"><a href="about">@lang("About Us")</a></li>

                <li ><a href="/">@lang("home")</a></li>
            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>
<!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>@lang("About")</h2>
                    <p >@lang("Kaf Company is trading Company for oil from turkey to the syiran north")</p>
                </div>
            </div>
        </div>
        <div class="container" style="text-align: right">
            <ol>
                <li><a href="/home">@lang("Home")</a></li>
                <li>@lang("About")</li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">



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
    </section>
    <!-- End About Section -->
@if($part1->first())
    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>@lang("Work Process")</h2>
                <p>@lang("We are Working in the idlib in importing and exporting oil")</p>
            </div>
            <?php
            $i =0;
            ?>
@foreach($part1 as $row)
@if($i % 2 == 0)
            <div class="row content">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-fluid" />
                </div>
                <div style="text-align: right" class="col-md-7 pt-4" data-aos="fade-left">
                    <h3>{{__($row->title)}}</h3>
                    <p class="font-italic">
                        {{__($row->description)}}
                    </p>

                </div>
            </div>

                @endif

    @if($i % 2 == 1)

                <div class="row content">
                    @if($row->image)
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-fluid" />
                    </div>
                    @endif
                    <div style="text-align: right" class="col-md-7 pt-4" data-aos="fade-left">
                        <h3>{{__($row->title) ?? ''}}</h3>
                        <p class="font-italic">
                            {{__($row->description) ?? ''}}
                        </p>

                    </div>
                </div>

    @endif
    <?php
    $i++;
    ?>
            @endforeach

        </div>
    </section>
    <!-- End Work Process Section -->

@endif
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>@lang("Our Clients")</h2>
                <p>@lang("We are proud with our client here is a number of them ")</p>
            </div>
            @if($logos)
            <div class="owl-carousel clients-carousel" data-aos="fade-up">
                @foreach($logos as $logo)
                <img src="{{ URL::to('/') }}/images/{{ $logo->image }}" alt="">
                    @endforeach
            </div>
                @endif

        </div>
    </section>
    <!-- End Our Clients Section -->

</main>
<!-- End #main -->

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
                        <li><a href="services">@lang("Services")</a></li </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>@lang("Contact Us")</h4>
                    <p>
                        @lang("A108 Adam Street") <br> @lang(" New York, NY 535022")<br> @lang("United States") <br>
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
            @lang(" Devloped by")<a href="https://wa.me/00905358840111" ; target="_blank" style="text-decoration: underline!important;">@lang("Abduljawad Kayali")</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

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
