<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    //Increase Menu Quantity
    public function increaseQuantity($rowId)
    {
        $menu = Cart::get($rowId);
        $qty = $menu->qty + 1;
        Cart::update($rowId, $qty);
    }

    //Decrease Menu Quantity
    public function decreaseQuantity($rowId)
    {
        $menu = Cart::get($rowId);
        $qty = $menu->qty - 1;
        Cart::update($rowId, $qty);
    }

    //Destroy Item
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        session()->flash('success_message', 'Your item has been removed successfully! ');
    }

    //Delete all Menu in Cart
    public function destroyAll()
    {
      Cart::destroy();
    }

    //Checkout
    public function checkout()
    {
        //Checking if the User is already LOGIN
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::count() > 0)
        {
            session()->forget('checkout');
            return;
        }

        session()->put('checkout', [
            'subtotal' => Cart::subtotal(),
            'tax' => Cart::tax(),
            'total' => Cart::total()
            ]);
    }

    public function render()
    {
        $this->setAmountForCheckout();

        return view('livewire.cart-component')->layout('layouts.master');
    }
}
