<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use App\Models\Category;
use Livewire\Component;
use Cart;
use Livewire\WithPagination;

class HomeComponent extends Component
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

        session()->flash('success_message', 'Item added in Cart');
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
        $main_dishes = Menu::inRandomOrder()->limit(3)->get();

        return view('livewire.home-component', ['menus' => $menus,
                                                'main_dishes' => $main_dishes,
                                                'categories' => $categories,])->layout('layouts.master');
    }

}
