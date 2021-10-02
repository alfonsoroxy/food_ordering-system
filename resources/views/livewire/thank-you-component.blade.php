<main>
  <div>
    <section class="section-header bg-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="text-capitalize mb-4 font-lg text-white">Thank You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section thank">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="font-lg mb-4"> <span class="text-primary">Thank you</span> <br>for your order</h2>
                    <p>Your order hasn’t shipped yet but please check the orders details to know your order status.</p>
                    <div class="mt-4">
                      <a href="{{ url('menu') }}" class="btn btn-black mt-4">Back to Menu</a>
                      <!-- <a href="{{ url('cart') }}" class="btn btn-solid-border mt-4">Track order</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer start -->
    @include('partials.footer')
    <!-- Footer  End -->

  </div>
</main>
