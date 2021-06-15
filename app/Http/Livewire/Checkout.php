<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;
use Illuminates\Support\Facades\Auth;

class Checkout extends Component
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
        return view('livewire.checkout');
    }
}
