<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CustomerOrdersComponent extends Component
{

    public function render()
    {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(12);

        return view('livewire.customer.customer-orders-component', ['orders' => $orders])->layout('layouts.master');
    }
}
