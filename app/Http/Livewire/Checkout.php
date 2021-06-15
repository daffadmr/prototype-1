<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{
    public $order, $status;

    public function mount($id) {
        $pesanan = Order::find($id);

        if ($pesanan) {
            $this->order = $pesanan;
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 0) {
            return view('livewire.checkout');
        } else {
            abort(404);
        }
    }
}
