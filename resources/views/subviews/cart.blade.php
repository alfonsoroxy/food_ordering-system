@extends('layouts.master')

@section('content')
<section class="section-header bg-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-4 font-lg text-white">Cart Page</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section cart">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table text-center table-cart">
            <thead>
              <tr>
                <th scope="col" colspan="2">product name</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
                <th scope="col">subtotal</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-left">
                  <img src="{{ asset('frontend/images/cart/popular-sm-3.jpg') }}" alt="#" class="img-fluid w-25 mr-3">
                  Lemon Rosemary Chicken
                </th>
                <td> </td>
                <td>₱79.00</td>
                <td><input class="quantity" type="text" value="1" name="quantity"></td>
                <td>₱79.00</td>
                <td class="text-right"><i class="ti-close close"></i></td>
              </tr>
              <tr>
                <th scope="row" class="text-left"> <img src="{{ asset('frontend/images/cart/popular-sm-2.jpg') }}" alt="#" class="img-fluid w-25 mr-3">Seasonal Soup</th>
                <td> </td>
                <td>₱79.00</td>
                <td><input class="quantity" type="text" value="1" name="quantity"></td>
                <td>₱79.00</td>
                <td class="text-right"><i class="ti-close close"></i></td>
              </tr>
              <tr>
                <th scope="row" class="text-left"><img src="{{ asset('frontend/images/cart/popular-sm.jpg') }}" alt="" class="img-fluid w-25 mr-3">Pizza Pane</th>
                <td> </td>
                <td>₱79.00</td>
                <td><input class="quantity" type="text" value="1" name="quantity"></td>
                <td>₱79.00</td>
                <td class="text-right"><i class="ti-close close"></i></td>
              </tr>
              <tr class="border-bottom">
                <td><a href="{{ url('menu') }}" class="btn btn-main-border pull-right">
                    Back to Menu
                  </a>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#" class="btn btn-main-border pull-right">
                    update cart
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 mt-4">
        <div class="px-xl-5 py-4 card border-0 ">
          <div class="">
            <h4 class="text-dark font-size-20">Order Summery</h4>
            <hr>
            <p>Excepteur sint occaecat cupidat non proident sunt officia.</p>
          </div>

          <div class="media align-items-center border-bottom font-weight-medium py-3">
            <div class="media-body">
              <span class="text-black">Subtotal</span>
            </div>
            <span class="text-dark">₱237.00</span>
          </div>

          <div class="media align-items-center border-bottom font-weight-medium py-3">
            <div class="media-body">
              <span class="text-black">Shipping &amp; Handling</span>
            </div>
            <span class="text-dark">₱0</span>
          </div>

          <div class="media align-items-center border-bottom font-weight-medium py-3">
            <div class="media-body">
              <span class="text-black">Estimated Tax</span>
            </div>
            <span class="text-dark">₱0</span>
          </div>

          <div class="media justify-content-between align-items-center py-3">
            <span class="text-dark ">Grand Total</span>
            <span class="text-dark font-weight-bold">₱237.00</span>
          </div>

          <a href="{{ url('shipping') }}" class="btn btn-main mt-4">
            Proceed to checkout
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
