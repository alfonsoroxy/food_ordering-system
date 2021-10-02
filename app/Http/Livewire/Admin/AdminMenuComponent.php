<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Menu;


class AdminMenuComponent extends Component
{
    use WithPagination;

    //Delete Menu
    public function deleteMenu($id)
    {
        $menu = Menu::find($id);

        $menu->delete();
        session()->flash('message', 'Menu has been deleted successfully! ');
    }

    public function render()
    {
        $menus = Menu::paginate(10);
        return view('livewire.admin.admin-menu-component', ['menus' => $menus])->layout('layouts.master');
    }
}
