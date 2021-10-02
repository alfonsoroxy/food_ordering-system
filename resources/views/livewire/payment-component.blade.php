<main>
  <div>
    <section class="section-header bg-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="text-capitalize mb-4 font-lg text-white">Payment</h1>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="section payment">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                  <ul class="list-inline select-option border-bottom pb-4">
                    <li class="list-inline-item mr-5 mb-4 mb-lg-0">
                      <a href="{{ url('checkout') }}" class="text-black "><span class="font-extra font-md border p-2 mr-3">01.</span> Shipping</a>
                    </li>
                    <li class="list-inline-item mr-5 mb-4 mb-lg-0">
                      <a href="{{ url('payment') }}" class="text-black font-weight-bold"><span class="font-extra bg-primary font-md text-white  p-2 mr-3">02.</span> Payment Method</a>
                    </li>

                    <li class="list-inline-item">
                      <a href="{{ url('thank-you') }}" class="text-black"><span class="font-extra font-md border p-2 mr-3">03.</span>Confirm Pay</a>
                    </li>
                  </ul>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-lg-8">
                <div class=" payment-form py-6">
                  <h3 class="headline mb-4 font-weight-bold border-bottom pb-3">Payment Method</h3>
                  <form class="form-top" action="index.html" method="post">

                    <div class="card border-0 px-xl-5 secondary-bg py-4 mt-5 mt-lg-0 px-4">
                      <div class="">
                        <p>COD is only available for now</p>
                        <hr>
                      </div>

                      <div class="media align-items-center border-bottom font-weight-medium py-3">
                        <div class="media-body">
                          <label>
                            <input type="radio" value="cod" /> <span class="text-dark"> Cash on Delivery</span>
                          </label>
                        </div>
                      </div>

                    </div>

                    <div class="form-group row mt-5 border p-4 align-items-center justify-content-between">
                        <div class="">
                            <input type="checkbox" name="term">
                            <span class="policy">I have read and accept the
                              <a href="{{ url('terms') }}">terms</a> and
                              <a href="{{ url('policy') }}">conditions</a>.
                            </span>
                        </div>

                        <a href="{{ url('thank-you') }}" class="btn btn-main confirm-btn mt-3 mt-lg-0">Place Order</a>
                    </div>

                  </form>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card border-0 px-xl-5 secondary-bg py-4 px-4 mt-5 mt-lg-0">
                  <div class="">
                    <h4 class="text-dark font-size-20">Order Summary</h4>
                    <hr>
                    <p>Excepteur sint occaecat cupidat non proident sunt officia.</p>
                  </div>

                  <div class="media align-items-center border-bottom font-weight-medium py-3">
                    <div class="media-body">
                      <span>Subtotal</span>
                    </div>
                    <span class="text-dark">₱237.00</span>
                  </div>

                  <div class="media align-items-center border-bottom font-weight-medium py-3">
                    <div class="media-body">
                      <span>Shipping &amp; Handling</span>
                    </div>
                    <span class="text-dark">₱0</span>
                  </div>

                  <div class="media align-items-center border-bottom font-weight-medium py-3">
                    <div class="media-body">
                      <span>Estimated Tax</span>
                    </div>
                    <span class="text-dark">₱0</span>
                  </div>

                  <div class="media justify-content-between align-items-center py-3">
                    <span class="text-dark ">Grand Total</span>
                    <span class="text-dark font-weight-bold">₱237.00</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
  </div>
  <!--Footer start -->
  @include('partials.footer')
  <!-- Footer  End -->
</main>
