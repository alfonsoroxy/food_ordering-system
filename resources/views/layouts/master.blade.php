
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>EYBI SILOG</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/themify/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/icofont/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/video-popup/modal-video.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/swiper/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/date-picker/datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/clock-picker/clockpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/devices.min.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">

</head>

<body>

  <!-- <div class="preloader">
    <img src="images/preloader.gif" alt="preloader" class="img-fluid">
  </div> -->

<!-- Header Start -->
  @include('partials.header')
<!-- Header Close -->

  <!-- Main Start  -->
  @yield('content')
  <!-- Main End -->

<!--Footer start -->
  @include('partials.footer')
<!-- Footer  End -->

<!-- jQuery -->
<script src="{{ asset('frontend/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/aos/aos.js') }}"></script>
<script src="{{ asset('frontend/plugins/shuffle/shuffle.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/date-picker/datepicker.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/clock-picker/clockpicker.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/video-popup/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/instafeed/instafeed.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.js') }}"></script>

 <!-- Google Map -->
<script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ') }}"></script>
<script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>
<!-- Main Script -->
<script src="{{ asset('frontend/js/contact.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>

</html>
