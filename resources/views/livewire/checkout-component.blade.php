<main>
  <div>
    <section class="section-header bg-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="text-capitalize mb-4 font-lg text-white">Checkout</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section shipping">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">
            <ul class="list-inline select-option border-bottom pb-4">
              <li class="list-inline-item mr-5 mb-4 mb-lg-0">
                <a href="{{ url('checkout') }}" class="text-hover-dark font-weight-bold"><span class="font-extra font-md bg-primary p-2 text-white mr-3"></span>Shipping &amp; Payment Method</a>

              <!-- <li class="list-inline-item">
                <a href="#" class="text-black"><span class="font-extra font-md border p-2 mr-3">02.</span>Confirm Pay</a>
              </li> -->
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-8">
            <div class="details-form">
              <h3 class="headline mb-3 font-weight-bold">Your Details</h3>
              <hr>

              <form wire:submit.prevent="placeOrder">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="First Name" name="first_name" wire:model.lazy="first_name" required="">
                      @error('first_name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>Address #1</label>
                      <input type="text" class="form-control" placeholder="Address #1" name="address_1" wire:model.lazy="address_1" required="">
                      @error('address_1') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="number" class="form-control" placeholder="Contact Number" name="contact_number" wire:model.lazy="contact_number" required="">
                      @error('contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>Postal / ZIP Code</label>
                      <input type="number" class="form-control" placeholder="Zip Code" name="zip_code" wire:model.lazy="zip_code" required="">
                      @error('zip_code') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>Province</label>
                      <input type="text" class="form-control" placeholder="Province" name="province" wire:model.lazy="province" required="">
                      @error('province') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <div class="card border-0 px-xl-5 secondary-bg py-4 mt-5 mt-lg-0 px-4">

                        <div class="">
                            <h4 class="text-dark font-size-20">Payment Method</h4>
                            <p>Cash on Delivery is only available for now</p>
                            <hr>
                          </div>
                        <div class="media align-items-center border-bottom font-weight-medium py-3">
                            <div class="media-body">
                              <label>
                                <input type="radio" value="cod" wire:model.lazy="paymentMode" /> <span class="text-dark"> Cash on Delivery</span>
                                @error('paymentMode') <p class="text-danger">{{ $message }}</p> @enderror
                              </label>
                            </div>
                          </div>
                        <div class="media align-items-center border-bottom font-weight-medium py-3">
                            <div class="media-body">
                              <div class="">
                                <input type="checkbox" name="term">
                                <span class="policy">I have read and accept the
                                    <a href="{{ url('terms') }}">terms</a> and
                                    <a href="{{ url('policy') }}">conditions</a>.
                                </span>
                              </div>

                              <div class="col-lg-12">
                                <div class="mt-4">
                                  <button type="submit" class="btn btn-main float-right">Place Order</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" name="last_name" wire:model.lazy="last_name" required="">
                      @error('last_name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>Address #2</label>
                      <input type="text" class="form-control" placeholder="Address #2" name="address_2" wire:model.lazy="address_2">
                    </div>

                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control" placeholder="E-Mail" name="email" wire:model.lazy="email" required="">
                      @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="Country" name="country" wire:model.lazy="country" required="">
                      @error('country') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" name="city" wire:model.lazy="city" required="">
                      @error('city') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                  </div>
                </div>

              </form>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card border-0 px-xl-5 secondary-bg py-4 mt-5 mt-lg-0 px-4">
              <div class="">
                <h4 class="text-dark font-size-20">Order Summary</h4>
                <hr>
                <p>Excepteur sint occaecat cupidat non proident sunt officia.</p>
              </div>

              <div class="media align-items-center border-bottom font-weight-medium py-3">
                <div class="media-body">
                  <span>Subtotal</span>
                </div>
                <span class="text-dark">₱{{Cart::subtotal()}}</span>
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
                <span class="text-dark">₱{{Cart::tax()}}</span>
              </div>

              <div class="media justify-content-between align-items-center py-3">
                <span class="text-dark ">Grand Total</span>
                <span class="text-dark font-weight-bold">₱{{Cart::total()}}</span>
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
