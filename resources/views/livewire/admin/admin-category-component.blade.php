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
                <h2 class="mr-5">All Categories</h2>
              </div>
              <div class="col-md-6">
                <a href="{{ route('admin.addcategory')}}" class="btn btn-success pull-right mb-5">Add New Category</a>
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
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($categories as $category)
                      <tr>
                          <td>{{$category->id}}</td>
                          <td>{{$category->name}}</td>
                          <td>{{$category->slug}}</td>
                          <td>
                            <a href="{{ route('admin.editcategory', ['category_slug' => $category->slug])}}"><i class="icofont-edit"></i></a>
                            <a href="#" onclick="confirm('Are you sure, You want do delete this category? ') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 15px;"><i class="icofont-ui-delete"></i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
            {{$categories->links()}}
            <!-- pagination::bootstrap-4 -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
