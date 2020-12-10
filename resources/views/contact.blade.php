@extends('layouts.app')
@section('content')

<script>
    // function formSwitch() {
    //     document.getElementById("info").style.display = "none";
    //     document.getElementById("contact").style.display = "block";
    // }

    // function cancel() {
    //     document.getElementById("contact").style.display = "none";
    //     document.getElementById("info").style.display = "block";
    // }
</script>

<style>
    .map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>

<!-- contact -->
<div id="intro" class="basic-1">
        <h1 style="text-align: center">Contact Us</h1>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <!-- <div  id="contact" class="container">
                    @if(Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name*" name="name">
                            @if($errors->has('name'))
                                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Email*" name="email">
                            @if($errors->has('email'))
                                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('business') }}" class="form-control" id="business" placeholder="Business Name*" name="business">
                            @if($errors->has('business'))
                                <small class="form-text invalid-feedback">{{ $errors->first('business') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" value="{{ old('message') }}" rows="5" id="message" name="message" placeholder="Tell us a bit about your needs so we can get you started*"></textarea>
                            @if($errors->has('message'))
                                <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                            @endif
                        </div>                      
                        <button type="submit" class="btn-solid-lg page-scroll" href="#contact">Send Message</button>
                        <button type="button" onclick="cancel()" class="btn-solid-lg">Cancel</button>
                    </form>
                </div> -->
                <div class="text-container" id="info">
                    <p>Where does your business need more support? We offer a broad range of services and packages that
                        be
                        customized to your needs. Send us a message today, and we can start you on a path to success.
                    </p>
                    <br>
                    <h3>Reliance Compliance Solutions</h3>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"><i class="fas fa-map-marker-alt"></i> 3080 Yonge Street, Toronto, Ontario
                            M4N 2K6, Canada</li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:info@reliancecompliance.ca">
                                info@reliancecompliance.ca</a></li>
                    </ul>
                    
                    <a class="btn-solid-lg page-scroll" href="/contact-form">Schedule a Consultation</a>
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

<div class="container">
<div class="map-responsive">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.2865082950652!2d-79.40501104950401!3d43.725374655677044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b32dd647aaaaf%3A0x22208ce94ddcb032!2s3080%20Yonge%20St%2C%20Toronto%2C%20ON%20M4N%203N1%2C%20Canada!5e0!3m2!1sen!2seg!4v1607200012966!5m2!1sen!2seg"
        width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>
</div>
@endsection