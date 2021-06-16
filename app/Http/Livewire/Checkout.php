<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{
    public $order, $idOrder;

    public function mount($id) {
        $pesanan = Order::find($id);

        if ($pesanan) {
            $this->order = $pesanan;
            $this->idOrder = $pesanan->id;
        }
    }

    public function bayar() {
        $pesanan = Order::find($this->idOrder);

        if ($pesanan) {
            $pesanan->update([
                'status' => 1,
            ]);
        }

        return redirect()->route('pembayaran', $pesanan->id);
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
