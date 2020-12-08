@extends('layouts.app')
@section('content')
<style>
    .middle {
        max-width: 800px;
    }
</style>
<!-- About -->
<div id="about" class="counter">
    <div class="container middle">
        <br>
        <center>
            <h1>About</h1>
        </center>
        <br>
        <p> Reliance Compliance Solutions Inc. (RCS) is a consulting company that was founded in 2020 and is
            based in Toronto, Ontario with a focus of delivering exceptional compliance solutions to various
            reporting entities such as Banks. Credit Unions, MSBs and Virtual currency dealers.<br><br>We specialize in
            Regulatory compliance, Anti Money Laundering and Counter Terrorist Financing
            and we offer a variety of services such as:</p>
        <ul class="list-unstyled li-space-lg">
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Compliance Regime Development/Build up</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">AML Program Development/Build up</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Policy reviews/write up</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">AML/Compliance effectiveness reviews</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Assist with regulatory exams (FINTRAC/AMF)</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Draft action plans to address examination findings</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Assist with Banking partner audits</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Act as AMF respondent</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Act as Compliance Officer or Chief AML Officer <span style="font-size: 12px">
                        **Terms & Conditions Apply**</span></div>
            </li>
        </ul>
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of about -->

<!-- Team -->
<div style="margin-top: -100px;" class="basic-2" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>The Team</h1>
                <br>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Team Member -->
                <div class="team-member">
                    <br>
                    <div class="image-wrapper">
                        <img style="border-radius: 50%;" class="img-fluid"
                            src="images/Peter Morcos-removebg-preview.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Peter Morcos</strong><br>CAMS, CFCS, CFE, CFI, CBP</p>
                    <p style="font-size: 18px;"><strong>Founder, CEO & CAMLO</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img style="border-radius: 50%;" class="img-fluid" src="images/0-removebg-preview.jpg"
                            alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 17px;"><strong>Claudius Otegbade</strong><br>FCA, CAMS, CFCS, CFE, CFI</p>
                    <p style="font-size: 17px;"><strong>AML Advisor</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of team -->

@endsection