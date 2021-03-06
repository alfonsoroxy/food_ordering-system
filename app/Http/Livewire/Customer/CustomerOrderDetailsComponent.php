<?php

namespace App\Http\Livewire\Customer;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerOrderDetailsComponent extends Component
{
    public $order_id;

    //Order ID
    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    //Cancel Order
    public function cancelOrder()
    {
        $order = Order::find($this->order_id);
        $order->status = "canceled";
        $order->canceled_date = DB::raw('CURRENT_DATE');
        $order->save();
        session()->flash('order_message', 'Order has been canceled successfully! ');
    }

    public function render()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('id', $this->order_id)->first();

        return view('livewire.customer.customer-order-details-component', ['order' => $order])->layout('layouts.master');
    }
}
