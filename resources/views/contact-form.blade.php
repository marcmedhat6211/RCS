@extends('layouts.app')
@section('content')
<style>
    .invalid-feedback {
        display: block;
    }
    .middle {
        max-width: 800px;
    }
</style>
<div id="intro" class="basic-1">
        <h1 style="text-align: center">Contact Us Form</h1>
        <br>   
    <div class="container middle">
        <div class="row">
            <div class="col-lg-12">
            <!-- form -->
            <div id="contact" class="container">
                @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message_sent') }}
                </div>
                @endif
                <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name*"
                            name="name">
                        @if($errors->has('name'))
                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{ old('email') }}" class="form-control" id="email"
                            placeholder="Email*" name="email">
                        @if($errors->has('email'))
                            <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('business') }}" class="form-control" id="business"
                            placeholder="Business Name*" name="business">
                        @if($errors->has('business'))
                            <small class="form-text invalid-feedback">{{ $errors->first('business') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" value="{{ old('message') }}" rows="5" id="message" name="message"
                            placeholder="Tell us a bit about your needs so we can get you started*"></textarea>
                        @if($errors->has('message'))
                            <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn-solid-lg page-scroll" href="#contact">Send Message</button>
                    <!-- <button type="button" onclick="cancel()" class="btn-solid-lg">Cancel</button> -->
                    <a class="btn-solid-lg page-scroll" href="/contact">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of form -->
@endsection