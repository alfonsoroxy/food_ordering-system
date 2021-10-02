<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use App\Models\Category;
use Livewire\Component;
use Cart;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->pagesize = 12;

        $this->category_slug = $category_slug;
    }

    //Add to Cart Function
    public function store($menu_id, $menu_name, $menu_price)
    {
        Cart::add($menu_id, $menu_name, 1, $menu_price)->associate('App\Models\Menu');

        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('menu.cart');
    }

    use WithPagination;
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        //
        $categories = Category::all();

        //Menus
        $menus = Menu::all();
        $menus = Menu::where('category_id', $category_id)->paginate($this->pagesize);
        
        return view('livewire.category-component', ['menus' => $menus,
                                                    'categories' => $categories,
                                                    'category_name' => $category_name])->layout('layouts.master');
    }

}
