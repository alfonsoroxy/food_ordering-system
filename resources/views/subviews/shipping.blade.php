@extends('layouts.master')

@section('content')
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
            <a href="{{ url('shipping') }}" class="text-hover-dark font-weight-bold"><span class="font-extra font-md bg-primary p-2 text-white mr-3">01.</span> Shipping</a>

          </li>
          <li class="list-inline-item mr-5 mb-4 mb-lg-0">
            <a href="{{ url('payment') }}" class="text-black "><span class="font-extra font-md border p-2 mr-3">02.</span>Payment</a>
          </li>

          <li class="list-inline-item">
            <a href="{{ url('confirmation') }}" class="text-black"><span class="font-extra font-md border p-2 mr-3">03.</span>Confirm Pay</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-8">
        <div class="details-form">
          <h3 class="headline mb-3 font-weight-bold">Your Details</h3>
          <hr>

          <form action="mail/booking-form.php" id="bookingForm" method="post">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="First Name" name="first-name" required="">
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Address 1" name="address-1" required="">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="City" name="city-name" required="">
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control" placeholder="E-mail" name="booking-email" required="">
                </div>
              </div>

              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" name="last-name" required="">
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Philippines</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                  <input type="text" class="form-control" placeholder="Zip Code" name="zip-code" required="">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" placeholder="Phone No" name="phone-number" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <textarea class="form-control" placeholder="Special Requirements" rows="5" name="booking-message" required=""></textarea>
                <div class="mt-4">
                  <a href="{{ url('payment') }}" class="btn btn-main float-right" id="booking-submit-btn">Continue to
                    payment</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-12 col-lg-4">
        <div class="card border-0 px-xl-5 secondary-bg py-4 mt-5 mt-lg-0 px-4">
          <div class="">
            <h4 class="text-dark font-size-20">Order Summery</h4>
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
@endsection
