<main>
  <div>
    <style>
    nav svg {
      height: 20px;
    }
    nav .hidden {
      display: block !important;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
      color: #000000;
    }
    @media (max-width: 1200px) {
      .navbar-expand-lg .navbar-nav .nav-link {
        margin-left: 25px;
        color: #fff;
      }
    }
  </style>

    <div class="container" style="padding: 150px 0;">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="mr-5">Order Details</h2>
                </div>
                <div class="col-md-6">
                  <a href="{{ route('admin.orders') }}" class="btn btn-success pull-right">All Orders</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table">
                <tr>
                  <th>Order ID</th>
                  <td>{{$order->id}}</td>
                  <th>Order Date</th>
                  <td>{{$order->created_at}}</td>
                  <th>Status</th>
                  <td>{{$order->status}}</td>
                  @if($order->status == 'delivered')
                  <th>Delivery Date</th>
                  <td>{{$order->delivered_date}}</td>

                  @elseif($order->status == 'canceled')
                  <th>Cancellation Date</th>
                  <td>{{$order->canceled_date}}</td>

                  @endif
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="mr-5">Order Items</h2>
                </div>
                <div class="col-md-6">

                </div>
              </div>
            </div>
            <div class="panel-body">
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
                          @foreach($order->orderItems as $item)
                          <tr>
                            <th scope="row" class="text-left">
                              <img src="{{ asset('frontend/images/menu') }}/{{$item->menu->image}}.jpg" alt="{{$item->menu->name}}" class="img-fluid w-25 mr-3">
                              {{$item->menu->name}}
                            </th>
                            <td> </td>
                            <td>₱{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>₱{{$item->price * $item->quantity}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6 mt-4">
                    <div class="px-xl-5 py-4 card border-0 ">
                      <div class="">
                        <h4 class="text-dark font-size-20">Order Summary</h4>
                        <hr>
                      </div>

                      <div class="media align-items-center border-bottom font-weight-medium py-3">
                        <div class="media-body">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <span class="text-dark">₱{{$order->subtotal}}</span>
                      </div>

                      <div class="media align-items-center border-bottom font-weight-medium py-3">
                        <div class="media-body">
                          <span class="text-black">Shipping &amp; Handling</span>
                        </div>
                        <span class="text-dark">Free Shipping</span>
                      </div>

                      <div class="media align-items-center border-bottom font-weight-medium py-3">
                        <div class="media-body">
                          <span class="text-black">Estimated Tax</span>
                        </div>
                        <span class="text-dark">₱{{$order->tax}}</span>
                      </div>

                      <div class="media justify-content-between align-items-center py-3">
                        <span class="text-dark ">Grand Total</span>
                        <span class="text-dark font-weight-bold">₱{{$order->total}}</span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
          	 </div>

            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="mr-5">Billing Details</h2>
            </div>
            <div class="panel-body">
              <table class="table">
                <tr>
                  <th>First Name</th>
                  <td>{{$order->first_name}}</td>
                  <th>Last Name</th>
                  <td>{{$order->last_name}}</td>
                </tr>
                <tr>
                  <th>Contact Number</th>
                  <td>{{$order->contact_number}}</td>
                  <th>Email</th>
                  <td>{{$order->email}}</td>
                </tr>
                <tr>
                  <th>Address #1</th>
                  <td>{{$order->address_1}}</td>
                  <th>Address #2</th>
                  <td>{{$order->address_2}}</td>
                </tr>
                <tr>
                  <th>City</th>
                  <td>{{$order->city}}</td>
                  <th>Province</th>
                  <td>{{$order->province}}</td>
                </tr>
                <tr>
                  <th>Country</th>
                  <td>{{$order->country}}</td>
                  <th>ZIP Code</th>
                  <td>{{$order->zip_code}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="mr-5">Transaction</h2>
            </div>
            <div class="panel-body">
              <table class="table">
                <tr>
                  <th>Transaction Mode</th>
                  <td>{{$order->transaction->mode}}</td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>{{$order->transaction->status}}</td>
                </tr>
                <tr>
                  <th>Transaction Date</th>
                  <td>{{$order->transaction->created_at}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</main>
