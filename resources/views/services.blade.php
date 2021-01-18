    @extends('layouts.app')
    @section('content')
    <style>
    .content {
        max-width: 500px;
        margin: auto;
        background: white;
        padding: 10px;
    }
    </style>
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1>Services</h1>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- card 1 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">AML / Compliance regime development</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We build up your AML / Compliance program by drafting up the required policies and procedures like AML / CTF manual, Risk assessment, Sanctions and ABC. We can also assist in amending your current ones to be compliant with the current regulations. <br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 2 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Manage Compliance Program</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We allocate our CAMS certified specialists to manage your compliance program for you including but not limited to transaction monitoring, investigations and filing reports to FINTRAC.<br><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 3 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">AML / Compliance effectiveness review</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We conduct a thorough AML/Compliance effectiveness review to your program as mandated by FINTRAC every 2 years. We also provide solutions to any findings in our review for an additional fee. <br><br></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 4 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Assist with regulatory exams (FINTRAC/AMF)</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We assist by prepping you for the exam interview as well as helping you gather all the necessary reports/documents to be presented for the exam. We can also draft up an action plan to address any findings from your exam.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 5 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Assist with bank onboarding/audit</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We assist with your bank onboarding and also prep you for the banking audit process by helping you gather all the necessary reports/documents to be presented for the audit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 6 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Act as Compliance officer or CAMLO</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We assign one of our CAMS certified AML specialist to act as your Compliance officer or Chief AML officer depending on your needs.<br><span style="font-size: 12px"> **Terms & Conditions Apply**</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 7 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Act as AMF Respondent</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We assign one of our team members in Quebec to act as your AMF respondent for communication and document filing purposes between your company and the AMF.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 8 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Training</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We can draft the training manual as well as the annual training courses for your company and we can also provide training to your compliance officer, the board of directors, AML specialists or the 1st line of defense. <br><br> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 9 rotating -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3 class="card-title vertical">Other advisory services</h3>
                                </div>
                                <div class="flip-card-back">
                                    <h6 class="vertical-body">We can introduce your business to our approved third party vendors that can assist with the automation of KYC or transaction monitoring to meet the regulatory requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection