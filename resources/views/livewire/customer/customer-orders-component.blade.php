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

    <div class="container ml-1" style="padding: 150px 0;">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="mr-5">All Orders</h2>
              </div>
              <div class="panel-body">
                @if(Session::has('order_message'))
            		<center><div class="alert alert-success" role="alert">
            			<i class="tf-ion-checkmark-circled"></i><span> {{Session::get('order_message')}} </span>
            		</div></center>
                @endif
                <table class="table table-stripped">
                  <thread>
                    <tr>
                      <th>Order ID</th>
                      <th>Subtotal</th>
                      <th>Tax</th>
                      <th>Total</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Contact Number</th>
                      <th>Email</th>
                      <th>Zip Code</th>
                      <th>Status</th>
                      <th>Order Date</th>
                      <th>Action</th>
                    </tr>
                  </thread>
                  <tbody>
                    @foreach($orders as $order)
                    <tr>
                      <td>{{$order->id}}</td>
                      <td>₱{{$order->subtotal}}</td>
                      <td>₱{{$order->tax}}</td>
                      <td>₱{{$order->total}}</td>
                      <td>{{$order->first_name}}</td>
                      <td>{{$order->last_name}}</td>
                      <td>{{$order->contact_number}}</td>
                      <td>{{$order->email}}</td>
                      <td>{{$order->zip_code}}</td>
                      <td>{{$order->status}}</td>
                      <td>{{$order->created_at}}</td>
                      <td><a href="{{ route('customer.ordersdetails', ['order_id' => $order->id]) }}" class="btn btn-info btn-sm">Details</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$orders->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>
