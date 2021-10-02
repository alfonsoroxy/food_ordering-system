<main>
  <style>
    nav svg{
      height: 20px;
    }
    nav .hidden{
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
  <div class="container" style="padding: 150px 0px;">
    <div class="row">
      <div class="col-mid-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mr-5">All Menus</h2>
              </div>
              <div class="col-md-6">
                <a href="{{ route('admin.addmenu')}}" class="btn btn-success pull-right mb-5">Add New Menu</a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            @if(Session::has('message'))
              <div class="alert alert-success" role="alert">
                <center><i class="icofont-check-circled"> </i>{{Session::get('message')}}</center>
              </div>
            @endif
            <table class="table table-striped">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($menus as $menu)
                      <tr>
                          <td>{{$menu->id}}</td>
                          <td><img src="{{ asset('frontend/images/menu') }}/{{$menu->image}}.jpg" width="60" /></td>
                          <td>{{$menu->name}}</td>
                          <td>{{$menu->stock_status}}</td>
                          <td>{{$menu->regular_price}}</td>
                          <td>{{$menu->category->name}}</td>
                          <td>{{$menu->created_at}}</td>
                          <td>
                            <a href="{{ route('admin.editmenu', ['menu_slug' => $menu->slug]) }}"><i class="icofont-edit"></i></a>
                            <a href="#" onclick="confirm('Are you sure, You want do delete this menu? ') || event.stopImmediatePropagation()" wire:click.prevent="deleteMenu({{$menu->id}})" style="margin-left: 15px;"><i class="icofont-ui-delete"></i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
            {{$menus->links()}}
            <!-- pagination::bootstrap-4 -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
