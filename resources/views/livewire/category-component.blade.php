<main>
  <div>
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

    		<div class="col-12 text-center mb-5">
          @foreach($categories as $category)
          <div class="btn-group btn-group-toggle ">
            <label class="btn active">
              <a href="{{ route('menu.category', ['category_slug' => $category->slug]) }}" role="button">{{$category->name}}</a>
            </label>
          </div>
          @endforeach
        </div>

    	   <div class="row shuffle-wrapper food-gallery">
           @foreach ($menus as $menu)
    	    	 <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;{{$category->id}}&quot;]">
    	         <div class="menu-item position-relative ">

    	            <div class="d-flex align-items-center">
    	             	<img src="{{ asset('frontend/images/menu') }}/{{$menu->image}}.jpg" alt="{{$menu->name}}" class="img-fluid">
                  		<div>
                  			<h4>{{$menu->name}} - <span>₱{{$menu->regular_price}}</span></h4>
                  			<p> {{$menu->description}} </p>
                  		   <div class="mb-4">
    			               	<a href="#" class="mt-2" wire:click.prevent="store('{{$menu->id}}', '{{$menu->name}}', '{{$menu->regular_price}}' )"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
    			               </div>
                    	</div>
    	              </div>

    	        	</div>
    	        </div>
            @endforeach
    	    </div>

    	</div>
    </section>
    
  </div>
  <!--Footer start -->
  @include('partials.footer')
  <!-- Footer  End -->
</main>
