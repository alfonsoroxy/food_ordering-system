<?php

namespace App\Http\Livewire\Admin;

use App\Models\Menu;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditMenuComponent extends Component
{
    use WithFileUploads;
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

    public $newImage;
    public $menu_id;

    public function mount($menu_slug)
    {
        $menu = Menu::where('slug', $menu_slug)->first();

        $this->name = $menu->name;
        $this->slug = $menu->slug;
        $this->description = $menu->description;
        $this->regular_price = $menu->regular_price;
        $this->MENU = $menu->MENU;
        $this->stock_status = $menu->stock_status;
        $this->featured = $menu->featured;
        $this->quantity = $menu->quantity;
        $this->image = $menu->image;
        $this->category_id = $menu->category_id;
        $this->menu_id = $menu->id;
    }

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

    //Update Admin Menu
    public function updateMenu()
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

        $menu = Menu::find($this->menu_id);
        $menu->name = $this->name;
        $menu->slug = $this->slug;
        $menu->description = $this->description;
        $menu->regular_price = $this->regular_price;
        $menu->MENU = $this->MENU;
        $menu->stock_status = $this->stock_status;
        $menu->featured = $this->featured;
        $menu->quantity = $this->quantity;
        if($this->newImage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('menu', $imageName);
            $menu->image = $imageName;
        }

        $menu->category_id = $this->category_id;
        $menu->save();
        session()->flash('message', 'Menu has been updated successfully!');

        return redirect()->route('admin.menus');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-menu-component', ['categories' => $categories])->layout('layouts.master');
    }
}
