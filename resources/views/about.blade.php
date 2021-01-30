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
        <p> Reliance Compliance Solutions Inc. (RCS) is a consulting company based in Toronto, Ontario with a focus on delivering exceptional compliance solutions to various reporting entities such as Banks, Credit Unions, MSBs and Virtual currency dealers.<br><br>Our team of professionals can provide assistance in Regulatory Compliance, Anti Money Laundering, Counter Terrorist Financing. We help our clients be compliant with Canadian regulations by focusing on building a comprehensive Compliance / AML program. We offer a variety of services such as:</p>
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
                <div class="media-body">Regulatory exams (FINTRAC/AMF)</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Bank onboarding / Audit</div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Compliance Officer or Chief AML Officer </div>
            </li>
            <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">AMF respondent</div>
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
                        <img class="team-img" src="images/team/headshot_13.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Peter Morcos</strong></p>
                    <p style="font-size: 18px;"><strong>Founder & CEO</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->
                
                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="team-img" src="images/team/john 2.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>John Morcos</strong></p>
                    <p style="font-size: 18px;"><strong>Financial Controller</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="team-img" src="images/team/JF.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Jean-François Lefebvre</strong></p>
                    <p style="font-size: 18px;"><strong>AMF Respondent</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <br>
                    <div class="image-wrapper">
                        <img class="team-img" src="images/team/me-removebg-preview.jpg" alt="alternative">
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
                        <img style="margin-bottom: 10px;" class="team-img" src="images/team/0-removebg-preview.jpg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p style="font-size: 18px;"><strong>Claudius Otegbade</strong></p>
                    <p style="font-size: 18px;"><strong>AML Advisor</strong></p>
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img style="margin-bottom: 10px;" class="team-img" src="images/team/Lekan-removebg-preview2.jpg" alt="alternative">
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