<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;

class DetailTransaction extends Component
{
    public $order;

    public function mount($id) {
        $DetailOrder = Order::find($id);

        if ($DetailOrder) {
            $this->order = $DetailOrder;
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.detail-transaction');
        } else {
            abort(404);
        }
    }
}
