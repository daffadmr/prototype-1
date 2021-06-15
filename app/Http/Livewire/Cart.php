<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    protected $order;
    protected $order_details = [];
    public $ongkir = 0;
    public $courier;

    public function hapus($id)
    {
        $order_details = OrderDetail::find($id);
        if(!empty($order_details)){
            $orders = Order::where('id', $order_details->order_id)->first();
            $total_order_detail = OrderDetail::where('order_id', $orders->id)->count();
            if($total_order_detail == 1)
            {
                $orders->delete();
            }else {
                $orders->total_price = $orders->total_price - $order_details->total_price;
                $orders->update();
            }

            $order_details->delete();
        }

        $this->emit('shoppingCart');
        session()->flash('message', 'Pesanan Dihapus');
    }

    public function tambahOngkir(){
        $this->ongkir = 10000;
    }

    public function updateCart() {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if($order) {
            if($order->shipping_costs == 0) {
                $order->update([
                    'shipping_costs' => 10000,
                    'final_price' => $order->final_price + 10000,
                    'courier' => $this->courier,
                ]);
    
                return redirect()->route('checkout', $order->id);
            } else {
                $order->update([
                    'courier' => $this->courier,
                ]);
                return redirect()->route('checkout', $order->id);
            }
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 0) {
            if(Auth::user())
            {
            $this->orders = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if($this->orders)
            {
                $this->order_details = orderDetail::where('order_id', $this->orders->id)->get();
            }
        }
        return view('livewire.cart', [
            'orders' => $this->orders,
            'order_details' => $this->order_details
        ]);
        } else {
            abort(404);
        }
    }
}