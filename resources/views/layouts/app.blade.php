<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>RelianceComplianceSolutions</title>
    
    <!-- Styles -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('public/images/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->
        <h4 style="color: white; font-size:1.8vw;"><span style="color: purple; font-size:2.3vw;">R</span>eliance <span style="color: purple; font-size:2.3vw;">C</span>ompliance <span style="color: purple; font-size:2.3vw;">S</span>olutions</h4>
        <!-- <h4 id="js-rotating">
            <span><h4 style="color: purple;">RCS</h4></span>,      <span><h4 style="color: purple;">R</h4><h4 style="color: white;">eliance</h4><h4 style="color: purple;">C</h4><h4 style="color: white;">ompliance</h4><h4 style="color: purple;">S</h4><h4 style="color: white;">olutions</h4></span>
        </h4> -->
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/clients">CLIENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/services">SERVICES</a>
                        </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->

    @yield('content')

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 Reliance Compliance Solutions - All Rights Reserved.</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('../js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script type="text/javascript" src="{{ URL::asset('../js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script type="text/javascript" src="{{ URL::asset('../js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script type="text/javascript" src="{{ URL::asset('../js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script type="text/javascript" src="{{ URL::asset('../js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script type="text/javascript" src="{{ URL::asset('../js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script type="text/javascript" src="{{ URL::asset('../js/morphext.min.js') }}"></script> <!-- Morphtext rotating text in the header -->
    <script type="text/javascript" src="{{ URL::asset('../js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
    <script type="text/javascript" src="{{ URL::asset('../js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script type="text/javascript" src="{{ URL::asset('../js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>