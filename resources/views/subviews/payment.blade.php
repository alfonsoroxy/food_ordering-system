@extends('layouts.master')

@section('content')
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
                  <a href="{{ url('shipping') }}" class="text-black "><span class="font-extra font-md border p-2 mr-3">01.</span> Shipping</a>
                </li>
                <li class="list-inline-item mr-5 mb-4 mb-lg-0">
                  <a href="{{ url('payment') }}" class="text-black font-weight-bold"><span class="font-extra bg-primary font-md text-white  p-2 mr-3">02.</span>Payment</a>
                </li>

                <li class="list-inline-item">
                  <a href="{{ url('confirmation') }}" class="text-black"><span class="font-extra font-md border p-2 mr-3">03.</span>Confirm Pay</a>
                </li>
              </ul>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class=" payment-form py-6">
              <h3 class="headline mb-4 font-weight-bold border-bottom pb-3">Payment Details</h3>
                <form class="form-top" action="index.html" method="post">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Name Of The Card:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="First Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Card Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Name of Card">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Card Number:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="245-5456645-55456">
                      <small id="passwordHelp" class="text-muted">
                        Visa / Master Card / Discover / Amercian Express / Payoneer
                      </small>
                    </div>
                  </div>

                  <div class="form-group row mt-4">
                    <div class="col-lg-4">
                      <label>Expiration Date:</label>
                    </div>
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <select class="form-control">
                          <option value="">Month</option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <select class="form-control">
                          <option value="">Year</option>
                          <option value="2016">2018</option>
                          <option value="2017">2019</option>
                          <option value="2018">2020</option>
                          <option value="2019">2021</option>
                          <option value="2020">2022</option>
                          <option value="2021">2023</option>
                      </select>
                    </div>
                  </div>

                 <div class="form-group row ">
                    <label class="col-sm-4 col-form-label">Security Code:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="*******">
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                      </small>
                    </div>
                </div>

                <div class="form-group row ">
                    <label class="col-sm-4 col-form-label">Or Pay Via:</label>
                    <div class="col-sm-8">
                      <img src="{{ asset('frontend/images/card6.png') }}" alt="image" class="img-fluid">
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

                    <a href="{{ url('confirmation') }}" class="btn btn-main confirm-btn mt-3 mt-lg-0">Confirm</a>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-12 col-lg-4">
            <div class="card border-0 px-xl-5 secondary-bg py-4 px-4 mt-5 mt-lg-0">
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
