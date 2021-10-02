<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddMenuComponent extends Component
{
    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $MENU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    //Generating Slug in Menu Name
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    //Validation
    public function updated($fields)
    {
        $this->validateOnly($fields, [
          'name' => 'required',
          'slug' => 'required|unique:menus',
          'description' => 'required',
          'regular_price' => 'required | numeric',
          'MENU' => 'required',
          'stock_status' => 'required',
          'quantity' => 'required | numeric',
          'image' => 'required | mimes: jpeg',
          'category_id' => 'required',
        ]);
    }

    //Adding new Product
    use WithFileUploads;
    public function addMenu()
    {
        $this->validate([
          'name' => 'required',
          'slug' => 'required|unique:menus',
          'description' => 'required',
          'regular_price' => 'required | numeric',
          'MENU' => 'required',
          'stock_status' => 'required',
          'quantity' => 'required | numeric',
          'image' => 'required | mimes: jpeg',
          'category_id' => 'required',
        ]);

        $menu = new Menu();
        $menu->name = $this->name;
        $menu->slug = $this->slug;
        $menu->description = $this->description;
        $menu->regular_price = $this->regular_price;
        $menu->MENU = $this->MENU;
        $menu->stock_status = $this->stock_status;
        $menu->featured = $this->featured;
        $menu->quantity = $this->quantity;

        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('menu',$imageName);
        $menu->image = $imageName;


        $menu->category_id = $this->category_id;

        $menu->save();
        session()->flash('message', 'Menu has been created successfully! ');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.admin-add-menu-component', ['categories' => $categories])->layout('layouts.master');
    }
}
