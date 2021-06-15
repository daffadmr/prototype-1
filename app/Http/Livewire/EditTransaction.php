<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class EditTransaction extends Component
{
    public $order, $idOrder;
    public $status = "1";

    public function mount($id) {
        $OrderDetail = Order::find($id);

        if ($OrderDetail) {
            $this->order = $OrderDetail;
            $this->idOrder = $OrderDetail->id;
            $this->status = $OrderDetail->status;
        }
    }

    public function editTransaksi() {
        $OrderDetail = Order::find($this->idOrder);

        if ($OrderDetail) {
            $OrderDetail->update([
                'status' => $this->status,
            ]);

            return redirect()->route('admin-order');
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.edit-transaction');
        } else {
            abort(404);
        }
    }
}
