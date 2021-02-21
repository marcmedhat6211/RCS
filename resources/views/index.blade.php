@extends('layouts.app')

@section('content')
<style>
    .button-resp {
        max-width: 90%
    }
</style>
<img class="home-img" src="images/home_last.jpg" alt="">
<div class="mobile-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>Who We Are</h3>
                </div>
                <div class="intro-content">
                    <p>Reliance Compliance Solutions Inc. (RCS) is a consulting company based in Toronto, Ontario with a focus on delivering exceptional compliance solutions to various reporting entities. We specialize in Regulatory compliance, Anti Money Laundering, and Counter Terrorist Financing</p>
                </div>
                <div class="intro-action-button">
                    <a class="btn-solid-lg page-scroll" href="/about">ABOUT US</a>
                </div>
                <br>
            </div>
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>Who We Serve</h3>
                </div>
                <div class="intro-content">
                    <p>Each sector has it's own regulatory requirements. Whether you are a bank, credit union, MSB, virtual currency dealer, securities dealer, payment service provider, dealer in precious metals & stones, accounting firm or a real estate firm, we have got you covered!</p>
                </div>
                <div class="intro-action-button">
                    <a class="btn-solid-lg page-scroll" href="/sectors">SECTORS</a>
                </div>
                <br>
            </div>
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>What We Do</h3>
                </div>
                <div class="intro-content">
                    <p>RCS' goal is to help you safeguard your success and educate you on the latest regulatory requirements. We offer various services that would cover all your compliance needs from building an AML program from the ground up to managing your existing compliance programs.</p>
                </div>
                <div class="intro-action-button">
                    <a class="btn-solid-lg page-scroll" href="/services">SERVICES</a>
                </div>
                <br>
            </div>
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>Why Us</h3>
                </div>
                <div class="intro-content">
                    <p>Our team of certified AML specialists has over 10 years experience in the industry and is ready to assist you with all your compliance and AML needs. We have a passion for helping others and seeing them succeed. Let us get you on the right track, let us get you compliant!</p>
                </div>
                <div class="intro-action-button">
                    <a class="btn-solid-lg page-scroll" href="/about#team">THE TEAM</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="desktop-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>Who We Are</h3>
                </div>
                <div class="intro-content">
                    <p>Reliance Compliance Solutions Inc. (RCS) is a consulting company based in Toronto, Ontario with a focus on delivering exceptional compliance solutions to various reporting entities. We specialize in Regulatory compliance, Anti Money Laundering, and Counter Terrorist Financing</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>Who We Serve</h3>
                </div>
                <div class="intro-content">
                    <p>Each sector has it's own regulatory requirements. Whether you are a bank, credit union, MSB, virtual currency dealer, securities dealer, payment service provider, dealer in precious metals & stones, accounting firm or a real estate firm, we have got you covered!</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>What We Do</h3>
                </div>
                <div class="intro-content">
                    <p>RCS' goal is to help you safeguard your success and educate you on the latest regulatory requirements. We offer various services that would cover all your compliance needs from building an AML program from the ground up to managing your existing compliance programs.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="intro-title">
                    <h3>Why Us</h3>
                </div>
                <div class="intro-content">
                    <p>Our team of certified AML specialists has over 10 years experience in the industry and is ready to assist you with all your compliance and AML needs. We have a passion for helping others and seeing them succeed. Let us get you on the right track, let us get you compliant!</p>
                </div>
            </div>
        </div>
        <div class="intro-action-buttons">
            <div class="container pl-0">
                <div class="row">
                    <div class="col-lg-3">
                        <a class="btn-solid-lg page-scroll" href="/about">ABOUT US</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn-solid-lg page-scroll" href="/sectors">SECTORS</a>
                    </div>
                    <div class="col-lg-3 pl-4">
                        <a class="btn-solid-lg page-scroll" href="/services">SERVICES</a>
                    </div>
                    <div class="col-lg-3 pl-4">
                        <a class="btn-solid-lg page-scroll" href="/about#team">THE TEAM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection