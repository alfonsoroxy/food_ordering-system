@extends('layouts.master')

@section('content')
<section class="section-header bg-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-4 font-lg text-white">Get in Touch</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact form start -->
<section class="contact-form-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center ">
        <span class="text-primary font-extra font-md">Contact us</span>
        <h2 class="mb-5">Get in touch </h2>

        <form id="contact-form" class="contact__form" method="post" action="mail.php">
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>
          <!-- end message -->

          <div class="form-row">
            <div class="form-group col-lg-6">
              <input name="name" type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group col-lg-6">
              <input name="email" type="email" class="form-control" placeholder="Email Address">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6">
              <input name="phone" type="text" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group col-lg-6">
              <input name="subject" type="text" class="form-control" placeholder="Subject">
            </div>
          </div>

          <div class="form-group-2 mb-4">
            <textarea name="message" class="form-control" rows="8" placeholder="Your Message"></textarea>
          </div>
          <button class="btn btn-main" name="submit" type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="map" id="map_canvas" data-marker="{{ asset('frontend/images/marker.png') }}">
     <iframe src="https://www.google.com/maps/place/Don+A.+Roces+Ave,+Diliman,+Quezon+City,+Metro+Manila/@14.6407048,121.0089015,13z/data=!4m5!3m4!1s0x3397b64ea1bd4f23:0xaa13de9ddd07af8c!8m2!3d14.6300972!4d121.0276738" allowfullscreen></iframe>
</div>

<!-- <div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758" data-marker="images/marker.png"></div> -->
@endsection
