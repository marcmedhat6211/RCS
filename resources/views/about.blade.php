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
            based in Toronto, Ontario with a focus on delivering exceptional compliance solutions to various
            reporting entities such as Banks, Credit Unions, MSBs and Virtual currency dealers.<br><br>We specialize in
            Regulatory compliance, Anti Money Laundering, Counter Terrorist Financing
            and we offer a variety of services such as:</p>
        <ul class="list-unstyled li-space-lg">
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">AML / Compliance regime development</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Manage compliance program</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">AML/Compliance effectiveness review</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Assist with regulatory exams (FINTRAC/AMF)</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Assist with bank onboarding / audit</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Act as Compliance Officer or Chief AML Officer <span style="font-size: 12px">
                        **Terms & Conditions Apply** </span></div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Act as AMF respondent</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Training</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Other advisory services <br><br><br> </div>
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
                        <img class="img-fluid team-img" src="images/headshot_13.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Peter Morcos</strong></p>
                    <p style="font-size: 18px;"><strong>Founder, CEO & CAMLO</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->
                
                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img style="width: 300px;" class="img-fluid team-img" src="images/John Morcos.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>John Morcos</strong></p>
                    <p style="font-size: 18px;"><strong>Financial Controller</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid team-img" src="images/john 2-removebg-preview.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Name</strong></p>
                    <p style="font-size: 18px;"><strong>Position</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <br>
                    <div class="image-wrapper">
                        <img class="img-fluid team-img" src="images/me-removebg-preview.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Marc Medhat</strong></p>
                    <p style="font-size: 18px;"><strong>Compliance Analyst</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->



            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of team -->


<!-- Team -->
<div style="margin-top: -100px;" class="basic-2" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Advisory Board</h1>
                <br>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img style="margin-bottom: 10px;" class="img-fluid team-img" src="images/0-removebg-preview.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Claudius Otegbade</strong></p>
                    <p style="font-size: 18px;"><strong>AML Advisor</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img style="margin-bottom: 10px;" class="img-fluid team-img" src="images/Lekan-removebg-preview2.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Olalekan Olatunji</strong></p>
                    <p style="font-size: 18px;"><strong>AML Advisor</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of team -->

@endsection