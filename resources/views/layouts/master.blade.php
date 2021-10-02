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

  @livewireStyles

</head>

  <body>

    <div class="preloader">
      <img src="{{ asset('frontend/images/preloader.gif') }}" alt="preloader" class="img-fluid">
    </div>

    <!-- Header Start -->
    <header class="navigation ">
    	<nav class="navbar navbar-expand-lg main-nav py-lg-3 position-absolute w-100" id="main-nav">
    		<div class="container">
    			<a class="navbar-brand" href="{{ url('/') }}">
    				<img src="{{ asset('frontend/images/logo.png') }}" alt="" class="img-fluid">
    			</a>

    			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation"
    				aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="fa fa-bars"></span>
    			</button>

    			<div class="collapse navbar-collapse" id="navigation">
    				<ul class="navbar-nav ml-auto">
    					<li class="nav-item active">
    						<a class="nav-link" href="{{ url('/') }}">Home</a>
    					</li>
    					<li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
    					<li class="nav-item"><a class="nav-link" href="{{ url('menu') }}">Menu</a></li>
    					<li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('cart') }}">My Cart</a></li>
              <li class="nav-link">
                @if (Route::has('login'))
                    <li class="nav-link">
                        @auth
                            <!-- *** Admin *** -->
                            @if(Auth::user()->utype === 'ADM')
                              <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false">{{Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu">
                                  <!-- <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li> -->
                                  <li><a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a></li>
                                  <li><a class="dropdown-item" href="{{ route('admin.menus') }}">Menus</a></li>
                                  <li><a class="dropdown-item" href="{{ route('admin.orders') }}">Orders</a></li>
                                  <li><a class="dropdown-item" href="{{ route('admin.contacts') }}">Contacts</a></li>
                                  <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                </ul>
                              </li>
                              <form id="logout-form" method="post" action="{{ route('logout') }}">
                                @csrf
                              </form>

                            <!-- *** Customer *** -->
                            @else
                            <li class="nav-item dropdown" >
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{Auth::user()->name}}
                              </a>
                              <ul class="dropdown-menu">
                                <!-- <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboard</a></li> -->
                                <li><a class="dropdown-item" href="{{ route('customer.orders') }}">View Orders</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                              </ul>
                            </li>
                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                              @csrf
                            </form>
                            @endif
                        @else
                            <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                            <li><a href="{{ route('register') }}" class="nav-link">Sign-Up</a></li>
                        @endif
                    </li>
                @endif

              </li>
    				</ul>
    			</div>
    		</div>
    	</nav>
    </header>
    <!-- Header End -->

    <!-- <div class="preloader">
      <img src="images/preloader.gif" alt="preloader" class="img-fluid">
    </div> -->

    <!-- Main Start  -->

    {{ $slot }}

    <!-- Main End -->

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>
  <!-- Main Script -->
  <!-- <script src="{{ asset('frontend/js/contact.js') }}"></script> -->
  <script src="{{ asset('frontend/js/script.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

  @livewireScripts

  @stack('scripts')
  </body>
</html>
