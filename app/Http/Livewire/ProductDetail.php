<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{
    public $product, $note;
    public $quantity = "1";
    public $size = "S";
    
    public function mount($id) {
        $productDetail = Product::find($id);

        if ($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function shoppingCart() {
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        $total_price = $this->quantity * $this->product->price;

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(empty($order)) 
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'total_price' => $total_price,
                'status' => 0,
                'order_code' => 1,
            ]);

            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $order->order_code = 'INV-'.$order->id;
            $order->update();
        } 
        else {
            $order->total_price = $order->total_price + $total_price;
            $order->update();
        }

        OrderDetail::create([
            'total_order' => $this->quantity,
            'note' => $this->note,
            'product_id' => $this->product->id,
            'order_id' => $order->id,
            'size' => $this->size,
            'total_price' => $total_price
        ]);

        $this->emit('shoppingCart');
        session()->flash('message', 'Sukses Masuk Keranjang');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
