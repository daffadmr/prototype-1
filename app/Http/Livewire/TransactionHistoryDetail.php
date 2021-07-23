<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TransactionHistoryDetail extends Component
{
    public $order;
    
    public function mount($id) {
        $pesanan = Order::find($id);

        if ($pesanan) {
            $this->order = $pesanan;
        }
    }
    public function render()
    {
            if(Auth::user()->is_admin == 0) {
                return view('livewire.transaction-history-detail', [
                    'orders' => $this->order,
                    'order_details' => OrderDetail::where('order_id', $this->order->id)->get(),
                ]);
            } else {
                abort(404);
            }
    } 
}