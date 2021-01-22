@extends('layouts.app')

    @section('content')
    <style>
        .button-resp {
            max-width: 90%
        }
    </style>
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                 <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="text-container"> -->
                            <!-- <h1>BUSINESS <span id="js-rotating">TEMPLATE, SERVICES, SOLUTIONS</span></h1> -->
                            <!-- <h1>Reliance Compliance Solutions</h1> -->
                            <!-- <p class="p-heading p-large">RCS is a top consultancy company specializing in business growth using online marketing and conversion optimization tactics</p> -->
                            <!-- <a style="margin-top: 1px; position: absolute; top: 2; right: 0;" class="btn-solid-lg page-scroll button-resp" href="/contact">SCHEDULE A CONSULTATION TODAY</a> -->
                        <!-- </div> -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-5"> -->
                    <div style="margin-bottom: 100px" class="text-container">
                        <p>Reliance Compliance Solutions' goal is to help you safeguard your success and educate you on the latest regulatory requirements. 
                        Our team of certified AML specialists has over 10 years experience in the industry and is ready to assist you with all 
                        your compliance and AML needs. Whether you are a bank, credit union, MSB, crypto currency dealer, securities dealer, payment service 
                        provider,  dealer in precious metals & stones, accounting firm or a real estate company, we have got you covered! <br><br>
                        We have a passion for helping others and seeing them succeed. Let's get you on the right track, let's get you compliant!  </p>
                        <br>
                        <a class="btn-solid-lg page-scroll" href="/about#team">MEET THE TEAM</a>
                    </div> <!-- end of text-container -->
                <!-- </div> end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <!-- <img class="img-fluid float-right" src="images/homeimg2.jpg" alt="alternative"> -->
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->
    
    @endsection
