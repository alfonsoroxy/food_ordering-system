<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use App\Models\Category;
use Livewire\Component;
use Cart;
use Livewire\WithPagination;

class MenuComponent extends Component
{
    public $pagesize;

    public function mount()
    {
        $this->pagesize = 12;
    }

    //Add to Cart Function
    public function store($menu_id, $menu_name, $menu_price)
    {
        Cart::add($menu_id, $menu_name, 1, $menu_price)->associate('App\Models\Menu');

        session()->flash('success_message', 'Your item has been added in cart successfully! ');
        return redirect()->route('menu.cart');
    }

    use WithPagination;
    public function render()
    {
        //
        $categories = Category::all();

        //Menus
        $menus = Menu::all();
        $menus = Menu::paginate($this->pagesize);

        return view('livewire.menu-component', ['menus' => $menus,
                                                'categories' => $categories,])->layout('layouts.master');
    }

}
