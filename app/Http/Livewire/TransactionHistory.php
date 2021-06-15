<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;

class TransactionHistory extends Component
{

    public $orders;

    public function render()
    {
        if(Auth::user()->is_admin == 0) {
            if(Auth::user())
            {
            $this->orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
            }
        return view('livewire.transaction-history', [
            'orders' => $this->orders,
        ]);
        } else {
            abort(404);
        }
    }
}
