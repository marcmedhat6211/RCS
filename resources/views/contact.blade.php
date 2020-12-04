    @extends('layouts.app')
    @section('content')

     <!-- contact -->
    <div id="intro" class="basic-1">
        <center><h1>Contact Us</h1></center>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <p>Where does your business need more support? We offer a broad range of services and packages that be 
                        customized to your needs. Send us a message today, and we can start you on a path to success.</p>
                        <br>
                        <h3>Reliance Compliance Solutions</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>  3080 Yonge Street, Toronto, Ontario M4N 2K6, Canada</li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:info@reliancecompliance.ca">  info@reliancecompliance.ca</a></li>
                        </ul>
                        <br>
                        <a class="btn-solid-lg page-scroll" href="#contact">Contact Us</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/compliance-wallpaper-16.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    
    <div id="contact" class="form-2" style="margin:0 auto; right:0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div> -->
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
    @endsection