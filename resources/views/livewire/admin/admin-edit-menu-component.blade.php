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
                <h2 class="mr-5">Edit Menu</h2>
              </div>
              <div class="col-mid-6">
                <a href="{{ route('admin.menus')}}" class="btn btn-success pull-right mb-5">All Menus</a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            @if(Session::has('message'))
              <div class="alert alert-success" role="alert">
                <center><i class="icofont-check-circled"> </i>{{Session::get('message')}}</center>
              </div>
            @endif
            <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateMenu">
              <div class="form-group">
                <label class="col-mid-4 control-label">Menu Name</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="Menu Name" wire:model="name" wire:keyup="generateSlug" />
                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Menu Slug</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="Menu Slug" wire:model="slug"  />
                    @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Description</label>
                  <div class="col-mid-4">
                    <textarea type="text" class="form-control input-md" placeholder="Description" wire:model="description"></textarea>
                    @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Regular Price</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="Regular Price" wire:model="regular_price"  />
                    @error('regular_price') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">MENU</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="FOOD-" wire:model="MENU"  />
                    @error('MENU') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Stock</label>
                  <div class="col-mid-4">
                    <select class="form-control" wire:model="stock_status">
                      <option value="instock">InStock</option>
                      <option value="outofstock">Out of Stock</option>
                    </select>
                    @error('stock_status') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Featured</label>
                  <div class="col-mid-4">
                    <select class="form-control" wire:model="featured">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Quantity</label>
                  <div class="col-mid-4">
                    <input type="text" class="form-control input-md" placeholder="Quantity" wire:model="quantity" />
                    @error('quantity') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Product Image</label>
                  <div class="col-mid-4">
                    <input type="file" class="input-file" wire:model="newImage" />
                    @if($newImage)
                      <img src="{{ $newImage->temporaryUrl() }}" width="120" />
                    @else
                      <img src="{{ public_path('frontend/images/menu') }}/{{$image}}" width="120" />
                    @endif
                    @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label">Category</label>
                  <div class="col-mid-4">
                    <select class="form-control" wire:model="category_id">
                      <option value="">Select Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    @error('category_id') <p class="text-danger">{{ $message }}</p> @enderror
                  </div>
              </div>
              <div class="form-group">
                <label class="col-mid-4 control-label"></label>
                  <div class="col-mid-4 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
