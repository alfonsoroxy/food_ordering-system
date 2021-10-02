<main>
  <div>
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
      @if(Session::has('success_message'))
        <div class="alert alert-success">
          <center><i class="icofont-check-circled"> </i>{{Session::get('success_message')}}</center>
        </div>
      @endif
      @if(Cart::count() > 0)
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table text-center table-cart">
                <thead>
                  <tr>
                    <th scope="col" colspan="2">Menu Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(Cart::content() as $item)
                  <tr>
                    <th scope="row" class="text-left">
                      <img src="{{ asset('frontend/images/menu') }}/{{$item->model->image}}.jpg" alt="{{$item->model->name}}" class="img-fluid w-25 mr-3">
                      {{$item->model->name}}
                    </th>
                    <td> </td>
                    <td>₱{{$item->model->regular_price}}</td>
                    <td>
                      <button type="button" class="btn-main btn-sm quantity-left-minus btn btn-number" data-type="minus" wire:click.prevent="decreaseQuantity('{{$item->rowId }}')">-</button>
                        <input class="quantity" type="text" id="quantity" class="form-control input-number input-sm" value="{{$item->qty}}" min="0" max="100">
                      <button type="button" class="btn-main btn-sm quantity-right-plus btn btn-number" data-type="plus" wire:click.prevent="increaseQuantity('{{$item->rowId }}')">+</button>
                    </td>
                    <td>₱{{$item->subtotal}}</td>
                    <td class="text-right"><a href="#" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="ti-close close"></i></a></td>
                  </tr>
                  @endforeach
                  <tr class="border-bottom">
                    <td><a href="{{ url('menu') }}" class="btn btn-main-border pull-right">
                        Back to Menu
                      </a>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-main-border pull-right" wire:click.prevent="destroyAll">
                        Destroy All
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
                <h4 class="text-dark font-size-20">Order Summary</h4>
                <hr>
                <p>Excepteur sint occaecat cupidat non proident sunt officia.</p>
              </div>

              <div class="media align-items-center border-bottom font-weight-medium py-3">
                <div class="media-body">
                  <span class="text-black">Subtotal</span>
                </div>
                <span class="text-dark">₱{{Cart::subtotal()}}</span>
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
                <span class="text-dark">₱{{Cart::tax()}}</span>
              </div>

              <div class="media justify-content-between align-items-center py-3">
                <span class="text-dark ">Grand Total</span>
                <span class="text-dark font-weight-bold">₱{{Cart::total()}}</span>
              </div>

              <a href="#" class="btn btn-main mt-4" wire:click.prevent="checkout">
                Proceed to checkout
              </a>
            </div>
          </div>
        </div>
      </div>
      @else
      <section class="section thank">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8 text-center">
                      <h2 class="font-lg mb-4"><span class="text-primary">Your Cart is  Currently Empty</span></h2>
                      <p class="h3">Find your desired menu now!</p>
                      <div class="mt-4">
                        <a href="{{ url('menu') }}" class="btn btn-black mt-4">Go to Menu</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      @endif
    </section>
  </div>
  <!--Footer start -->
  @include('partials.footer')
  <!-- Footer  End -->
</main>
