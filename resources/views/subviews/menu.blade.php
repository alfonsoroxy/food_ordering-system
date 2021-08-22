@extends('layouts.master')

@section('content')
<section class="section-header bg-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-4 font-lg text-white">Food menu</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section menu">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">Eybi Silog Dishes</span>
				<h2 class="mt-3 mb-4">We provide quality food.We care about your health </h2>

			</div>
		</div>

		<div class="col-12 text-center  mb-5">
	        <div class="btn-group btn-group-toggle " data-toggle="buttons">
	          <label class="btn active ">
	            <input type="radio" name="shuffle-filter" value="all" checked="checked">All
	          </label>
	          <label class="btn ">
	            <input type="radio" name="shuffle-filter" value="silog">Silog Meals
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="celebration">Celebration Foods
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="dessert">Dessert &amp Drinks
	          </label>
	        </div>
      </div>

	    <div class="row shuffle-wrapper food-gallery">
	      	<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
	          	<div class="menu-item position-relative ">
	                <div class="d-flex align-items-center">
	                	<img src="{{ asset('frontend/images/menu/menu-1.png') }}" alt="" class="img-fluid">
                		<div>
                			<h4>Chicsilog - <span>₱65.00</span></h4>
                			<p>Lorem Ipsum</p>
                			<div class="mb-4">
			                	<a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
			                </div>
                		</div>
	                </div>

	        	</div>
	      </div>

	      <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
	        	<div class="menu-item position-relative ">
	                 <div class="d-flex align-items-center">
	                	<img src="{{ asset('frontend/images/menu/menu-2.jpg') }}" alt="" class="img-fluid">
                		<div>
                			<h4>Tapasilog - <span>₱65.00</span></h4>
                			<p>Lorem Ipsum</p>
                			<div class="mb-4">
			                	<a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
			                </div>
                		</div>
	                </div>
	        	</div>
	      </div>

	      <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
	       	<div class="menu-item position-relative ">
	                <div class="d-flex align-items-center">
	                	<img src="{{ asset('frontend/images/menu/menu-3.jpg') }}" alt="" class="img-fluid">
                		<div>
                			<h4>Palabok - <span>₱450.00</span></h4>
                			<p>Lorem Ipsum</p>

                			<div class="mb-4">
			                	<a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
			                </div>
                		</div>
	                </div>
	        	</div>
	      </div>

	      <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;,&quot;branding&quot;]">
	        	<div class="menu-item position-relative ">
	                 <div class="d-flex  align-items-center">
	                	<img src="{{ asset('frontend/images/menu/menu-4.jpg') }}" alt="" class="img-fluid">
                		<div>
                			<h4>Sushi - <span>₱400.00</span></h4>
                			<p>Lorem Ipsum</p>
                			<div class="mb-4">
			                	<a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
			                </div>
                		</div>
	                </div>
	        	</div>
	      </div>

	      <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
	        	<div class="menu-item position-relative ">
	                 <div class="d-flex  align-items-center">
	                	<img src="{{ asset('frontend/images/menu/menu-5.jpg') }}" alt="" class="img-fluid">
                		<div>
                			<h4>Leche Flan - <span>3 for ₱100.00</span></h4>
                			<p>Lorem Ipsum</p>
                			<div class="mb-4">
			                	<a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
			                </div>
                		</div>
	                </div>
	        	</div>
	      </div>

	      <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
	       		<div class="menu-item position-relative ">
	                <div class="d-flex  align-items-center">
	                	<img src="{{ asset('frontend/images/menu/menu-6.jpg') }}" alt="" class="img-fluid">
                		<div>
                			<h4>Mango Float Tub - <span>₱65.00</span></h4>
                			<p>Lorem Ipsum</p>
                			<div class="mb-4">
			                	<a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
			                </div>
                		</div>
	                </div>
	        	</div>
	      </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-7.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Porkchop Silog - <span>₱65</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-8.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Crispy Pata - <span>₱250.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-9.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Soft Drinks - <span>₱50.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-10.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Selecta Ice Cream - <span>₱275.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;dessert&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-11.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Selecta Ice Cream Tub - <span>₱100.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-12.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Dinakdakan - <span>₱100.00</span></h4>
                      <p>Grilled Pork | Face | Ears | Liver | Tounge</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-13.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Hamsilog - <span>₱60.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-14.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Fried Grilled Itik - <span>₱270.00</span></h4>
                      <p>Fried | Grilled</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-15.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Fish Silog - <span>₱60.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-16.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Shawarma Plate - <span>₱60.00</span></h4>
                      <p>Spice Marinated Meat</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;silog&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-17.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Tocilog - <span>₱50.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-18.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Palabok Tub - <span>₱75.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;celebration&quot;]">
            <div class="menu-item position-relative ">
                  <div class="d-flex  align-items-center">
                    <img src="{{ asset('frontend/images/menu/menu-19.jpg') }}" alt="" class="img-fluid">
                    <div>
                      <h4>Sushi Mini - <span>₱175.00</span></h4>
                      <p>Lorem Ipsum</p>
                      <div class="mb-4">
                        <a href="{{ url('cart') }}" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>


	    </div>

	</div>
</section>



<section class="section menu-3 secondary-bg">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">Main Dishes</span>
				<h2 class="mt-3 mb-4">We provide quality food.We care about your health </h2>
			</div>
		</div>

		<div class="row ">
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="00">
				<div class="card border-0 menu-item3">
					<img src="{{ asset('frontend/images/menu/m-1.png') }}" alt="" class="img-fluid">

					<div class="card-body">
						<h3 class="card-title">Chicsilog - <span class="text-primary">₱60.00</span></h3>
						<p>Lorem Ipsum </p>
						<a href="{{ url('cart') }}" class="btn btn-main mt-2">Add to cart</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
				<div class="card border-0 menu-item3">
					<img src="{{ asset('frontend/images/menu/m-2.jpg') }}" alt="" class="img-fluid">

					<div class="card-body">
						<h3 class="card-title">Fish Silog - <span class="text-primary">₱60.00</span></h3>
						<p>Lorem Ipsum </p>
						<a href="{{ url('cart') }}" class="btn btn-main mt-2">Add to cart</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
				<div class="card border-0 menu-item3">
					<img src="{{ asset('frontend/images/menu/m-3.jpg') }}" alt="" class="img-fluid">

					<div class="card-body">
						<h3 class="card-title">Tocilog - <span class="text-primary">₱50.00</span></h3>
						<p>Lorem Ipsum </p>
						<a href="{{ url('cart') }}" class="btn btn-main mt-2">Add to cart</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection
