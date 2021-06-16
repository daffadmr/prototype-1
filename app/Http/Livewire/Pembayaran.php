<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class Pembayaran extends Component
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
            return view('livewire.pembayaran');
        } else {
            abort(404);
        }
        
    }

    
}