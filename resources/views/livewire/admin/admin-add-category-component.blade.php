<main>
  <style>
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
              <div class="col-mid-6">
                <h2 class="mr-5">Add New Category</h2>
              </div>
              <div class="col-mid-6">
                <a href="{{ route('admin.categories')}}" class="btn btn-success pull-right mb-5">All Categories</a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            @if(Session::has('message'))
              <div class="alert alert-success" role="alert">
                <center><i class="icofont-check-circled"> </i>{{Session::get('message')}}</center>
              </div>
            @endif
            <form class="form-horizontal" wire:submit.prevent="storeCategory">
              <div class="form-group">
                <label class="col-mid-4 control-label">Category Name</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="Category Name" wire:model="name" wire:keyup="generateslug" />
                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Category Slug</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="Category Slug" wire:model="slug"  />
                    @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label"></label>
                  <div class="col-mid-4 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
