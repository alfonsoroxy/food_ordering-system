<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Cart;

class CheckoutComponent extends Component
{
    public $first_name;
    public $last_name;
    public $address_1;
    public $address_2;
    public $contact_number;
    public $email;
    public $zip_code;
    public $country;
    public $province;
    public $city;

    public $paymentMode;
    public $thankyou;

    //Updated Form Validation
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'contact_number' => 'required | numeric',
            'email' => 'required | email',
            'zip_code' => 'required | numeric',
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'paymentMode' => 'required',
        ]);
    }

    //Place Order
    public function placeOrder()
    {
        //Form Validation
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'contact_number' => 'required | numeric',
            'email' => 'required | email',
            'zip_code' => 'required | numeric',
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'paymentMode' => 'required',
        ]);

        //Getting the Information
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->first_name = $this->first_name;
        $order->last_name = $this->last_name;
        $order->address_1 = $this->address_1;
        $order->contact_number = $this->contact_number;
        $order->email = $this->email;
        $order->zip_code = $this->zip_code;
        $order->country = $this->country;
        $order->province = $this->province;
        $order->city = $this->city;
        $order->status = 'ordered';
        $order->save();

        //Getting all the Orders in Cart
        foreach(Cart::content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->menu_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        //Payment Method
        if($this->paymentMode === 'cod')
        {
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }

        //After the Placing Order
        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    //Verification for Checkout
    public function verificationForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->thankyou)
        {
            return redirect()->route('thank-you');
        }
        else if(!session()->get('checkout'))
        {
            return redirect()->route('menu.cart');
        }
    }

    public function render()
    {
        $this->verificationForCheckout();

        return view('livewire.checkout-component')->layout('layouts.master');
    }
}
