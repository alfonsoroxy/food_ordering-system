@extends('layouts.master')

@section('content')
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
          @if (Route::has('login'))
              <li class="nav-link">
                  @auth
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false">{{Auth::user()->name}}</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
													<li><a class="dropdown-item" href="{{ route('logout') }}"
	                          onclick="event.preventDefault(); document.getElementById('logout-form')
	                          .submit();">Logout</a>
                        	</li>
	                        <form id="logout-form" method="post" action="{{ ('logout') }}">
	                          @csrf
	                        </form>
												</ul>
											</li>
                  @else
                      <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                      @if (Route::has('register'))
                          <li><a href="{{ route('register') }}" class="nav-link">Sign-Up</a></li>
                      @endif
                  @endauth
              </li>
          @endif
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Other Elements</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="{{ url('cart') }}">Cart</a></li>
							<li><a class="dropdown-item" href="{{ url('shipping') }}">Shipping</a></li>
							<li><a class="dropdown-item" href="{{ url('payment') }}">Payment</a></li>
							<li><a class="dropdown-item" href="{{ url('confirmation') }}">Confirmation</a></li>
						</ul>
					</li> -->

				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- Header End -->

<!--  Banner start -->
<section class="slider-hero hero-slider  hero-style-1  ">
  <div class="swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">
      <!-- start slide-item -->
      <div class="swiper-slide slide-item">
        <div class="slide-inner slide-bg-image main-sider-inner" data-background="{{ asset('frontend/images/slider/slide-1.jpg') }}">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to Eybi Silog</span>
                <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Fresh,Delicious meal to reach your optimum health and fitness</h1>
                <a href="{{ url('menu') }}" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slide-item -->

      <!-- start slide-item -->
      <div class="swiper-slide slide-item">
        <div class="slide-inner slide-bg-image main-sider-inner" data-background="{{ asset('frontend/images/slider/slide-2.jpg') }}">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to Eybi Silog</span>
                <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Good food starts with good ingridients.Have a great time with us</h1>
                <a href="{{ url('menu') }}" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slide-item -->

      <!-- start slide-item -->
      <div class="swiper-slide slide-item">
        <div class="slide-inner slide-bg-image main-sider-inner" data-background="{{ asset('frontend/images/slider/slide-3.jpg') }}">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to Eybi Silog</span>
                <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">We deliver good quality food with great service to our customers</h1>
                <a href="{{ url('menu') }}" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slide-item -->
    </div>
    <!-- end swiper-wrapper -->
    <!-- swipper controls -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!--  Banner End -->

<!--  Intro start -->
<section class="intro">
	<div class="container">
		<div class="intro-wrap bg-white w-100">
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-4">
					<div class="intro-item" data-aos="fade-up">
						<i class="icofont-soup-bowl"></i>
						<h3 class="mt-3">Delicious Food</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="intro-item bg-gray " data-aos="fade-up" data-aos-delay="300">
						<i class="icofont-tasks"></i>
						<h3 class="mt-3">Online Order</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati. </p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="intro-item" data-aos="fade-up" data-aos-delay="600">
						<i class="icofont-price"></i>
						<h3 class="mt-3">Affordable Price</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Intro End -->

<!-- About start -->
<section class="section about">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">About Eybi Silog</span>
				<h2 class="mt-3 mb-4">We are a modern silugan in the center of Quezon City </h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 mb-5 mb-lg-0" data-aos="fade-up">
				<img src="{{ asset('frontend/images/about/img-1.jpg') }}" alt="" class="img-fluid">
				<div class="mt-3">
					<h3>Quality Food</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.impedit maiores fugit illo deserunt!</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
				<img src="{{ asset('frontend/images/about/img-2.jpg') }}" alt="" class="img-fluid">
				<div class="mt-3">
					<h3>Friendly place</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.impedit maiores fugit illo deserunt!</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
				<img src="{{ asset('frontend/images/about/img-3.jpg') }}" alt="" class="img-fluid">
				<div class="mt-3">
					<h3>Affordable price</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.impedit maiores fugit illo deserunt!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About  End -->

<!-- CTA start -->
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<span class="font-extra text-md-2 text-white-70">Prepare The Best Dishes</span>
				<h2 class="mt-3 text-white mb-4">Come & Experience Our Best of Silog Cousine</h2>

				<a href="{{ url('contact') }}" class="btn btn-white">Contact Us</a>
			</div>
		</div>
	</div>
</section>
<!-- CTA  End -->

<!-- DISHES start -->
<section class="section menu">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">Eybi Silog Dishes</span>
				<h2 class="mt-3 mb-4">We provide quality food. We care about your health</h2>
			</div>
		</div>

		<div class="col-12 text-center mb-5">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn active">
					<input type="radio" name="shuffle-filter" value="all" checked="checked"/>All
				</label>
				<label class="btn">
					<input type="radio" name="shuffle-filter" value="silog"/>Silog Meals
				</label>
				<label class="btn">
					<input type="radio" name="shuffle-filter" value="celebration"/>Celebration Foods
				</label>
				<label class="btn">
					<input type="radio" name="shuffle-filter" value="dessert"/>Dessert &amp Drinks
				</label>
			</div>
		</div>

		<div class="row shuffle-wrapper food-gallery">
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;silog&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="{{ asset('frontend/images/menu/menu-1.png') }}" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Chicsilog - <span>₱65.00</span></h4>
							<p>Lorem Ipsum</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="{{ asset('frontend/images/menu/menu-2.jpg') }}" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Tapasilog - <span>₱65.00</span></h4>
							<p>Lorem Ipsum</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="{{ asset('frontend/images/menu/menu-3.jpg') }}" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Palabok - <span>₱450.00</span></h4>
							<p>Shrimp | Pork | Tofu</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;,&quot;branding&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex  align-items-center">
						<img src="{{ asset('frontend/images/menu/menu-4.jpg') }}" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Sushi - <span>₱400.00</span></h4>
							<p>Shashimi | Maki | Urumaki | Temaki</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="{{ asset('frontend/images/menu/menu-5.jpg') }}" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Leche Flan - <span>3 for ₱100.00</span></h4>
							<p>Lorem Ipsum</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="{{ asset('frontend/images/menu/menu-6.jpg') }}" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Mango Float Tub - <span>₱65.00</span></h4>
							<p>Lorem Ipsum</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 text-center mt-5">
				<a href="{{ url('menu') }}" class="btn btn-black ">View full menu</a>
			</div>
		</div>
	</div>
</section>
<!-- DISHES  End -->
@endsection
