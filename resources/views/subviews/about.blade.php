@extends('layouts.master')

@section('content')
<section class="section-header bg-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-4 font-lg text-white">About us</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section about-section position-relative border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0 col-md-6">
                <img src="{{ asset('frontend/images/about/about-img.jpg') }}" alt="#" class="img-fluid">

            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 col-md-6">
                <img src="{{ asset('frontend/images/about/about-2.jpg') }}" alt="#" class="img-fluid">
            </div>

            <div class="col-lg-5">
                <h2 class="mb-4">We've started making amazing foods since 2019</h2>
                <p>We are group who lost job cause of pandemic build and start this Silugan.
                  We start small bussiness and sell like Chicksilog compose of chicken , itlog (egg) and
                  sinangag (fried rice). Also many more Tocilog , Tapasilog , Sisigsilog and etc.</p>

                <p class="mb-4">After a months , we also sell some products like Sushi , Palabok , Shawarma ,
                  Crispy Pata , Dindakdakan and Grilled itik</p>

                <!-- <ul class="list-unstyled">
                    <li>
                        <h4>- Clean Environment</h4>
                    </li>

                    <li>
                        <h4>- Experience chefs</h4>
                    </li>

                    <li>
                        <h4>- Fresh and creative dishes</h4>
                    </li>
                </ul> -->

                <h3 class="booking">Contact Us Now! <br>09287047656 | 09198539877</h3>
            </div>
        </div>
    </div>
</section>

<section class="section chef">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">Meet The Web Developers</span>
				<h2 class="mt-3 mb-4">We have hardworking and creative Web Developers to start</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4" data-aos="fade-up">
				<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
					<img src="{{ asset('frontend/images/team/team_1.jpg') }}" alt="#" class="img-fluid">

					<h3 class="mb-0 mt-4">Casthertroy Bagtas</h3>
					<p class="text-sm font-weight-bold">Web Developer</p>
					<p>Lorem Ipsum.</p>

					<ul class="list-inline mb-0">
            <li class="li list-inline-item"><a href="{{ url('https://www.facebook.com/CTbagtas') }}"><i class="ti-facebook"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
				<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
					<img src="{{ asset('frontend/images/team/team_2.jpg') }}" alt="#" class="img-fluid">

					<h3 class="mb-0 mt-4">Dave Lopez Jomillo</h3>
					<p class="text-sm font-weight-bold">Web Developer</p>
					<p>Lorem Ipsum.</p>

					<ul class="list-inline  mb-0">
            <li class="li list-inline-item"><a href="{{ url('https://www.facebook.com/daveberry09') }}"><i class="ti-facebook"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
				<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
					<img src="{{ asset('frontend/images/team/team_3.jpg') }}" alt="#" class="img-fluid">

					<h3 class="mb-0 mt-4">Kenneth Karl</h3>
					<p class="text-sm font-weight-bold">Web Developer</p>
					<p>Lorem Ipsum.</p>

					<ul class="list-inline  mb-0">
            <li class="li list-inline-item"><a href="{{ url('https://www.facebook.com/kenneth.misanes') }}"><i class="ti-facebook"></i></a></li>
          </ul>
					</ul>
				</div>
			</div>
		</div>



    <div class="row mt-5">
			<div class="col-lg-4 col-md-4" data-aos="fade-up">
				<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
					<img src="{{ asset('frontend/images/team/team_4.jpg') }}" alt="#" class="img-fluid">

					<h3 class="mb-0 mt-4">Roxy Alfonso</h3>
					<p class="text-sm font-weight-bold">Web Developer</p>
					<p>Lorem Ipsum.</p>

					<ul class="list-inline mb-0">
            <li class="li list-inline-item"><a href="{{ url('https://www.facebook.com/alfonsoroxy') }}"><i class="ti-facebook"></i></a></li>
					</ul>
				</div>
			</div>

      <div class="col-lg-4 col-md-4" data-aos="fade-up">
				<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
					<img src="{{ asset('frontend/images/team/team_5.jpg') }}" alt="#" class="img-fluid">

					<h3 class="mb-0 mt-4">Cristian Sudsudan</h3>
					<p class="text-sm font-weight-bold">Web Developer</p>
					<p>Lorem Ipsum.</p>

					<ul class="list-inline mb-0">
						<li class="li list-inline-item"><a href="{{ url('https://www.facebook.com/sudsudan13') }}"><i class="ti-facebook"></i></a></li>
					</ul>
				</div>
			</div>

      <div class="col-lg-4 col-md-4" data-aos="fade-up">
				<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
					<img src="{{ asset('frontend/images/team/team_6.jpg') }}" alt="#" class="img-fluid">

					<h3 class="mb-0 mt-4">Valentine Gagarin</h3>
					<p class="text-sm font-weight-bold">Web Developer</p>
					<p>Lorem Ipsum.</p>

					<ul class="list-inline mb-0">
            <li class="li list-inline-item"><a href="{{ url('https://www.facebook.com/valentin.Niragag1') }}"><i class="ti-facebook"></i></a></li>
          </ul>
					</ul>
				</div>
			</div>
    </div>

	</div>
</section>
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-8">
				<span class="font-extra font-md text-white-70">Prepare The Best Dishes</span>
				<h2 class="mt-3 text-white mb-4 font-lg">Are you looking for a quite place? </h2>
				<a href="{{ url('contact') }}" class="btn btn-white">Contact Us</a>
			</div>
		</div>
	</div>
</section>
<section class="section service">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">Our services</span>
				<h2 class="mt-3 mb-4">We provide good services with lots of facilities</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6" data-aos="fade-up">
				<div class="service-item mb-5">
					<i class="icofont-cocktail"></i>
					<h3>Fresh Food</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
				<div class="service-item mb-5">
					<i class="icofont-food-basket"></i>
					<h3>Quality Cuisine</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
				<div class="service-item mb-5 mb-lg-0">
					<i class="icofont-restaurant"></i>
					<h3>Reserve Now</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
