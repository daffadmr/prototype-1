<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class EditAddress extends Component
{
    public $order, $idPesanan, $name, $address, $telephone;

    public function mount($id) {
        $pesanan = Order::find($id);

        if ($pesanan) {
            $this->order = $pesanan;
            $this->idPesanan = $pesanan->id;
            $this->name = $pesanan->name;
            $this->address = $pesanan->address;
            $this->telephone = $pesanan->telephone; 
        }
    }

    public function submitRecipient() {
        $pesanan = Order::find($this->idPesanan);

        if ($pesanan) {
            $pesanan->update([
                'name' => $this->name,
                'address' => $this->address,
                'telephone' => $this->telephone
            ]);

            return redirect()->route('checkout', $this->idPesanan);
        }
    }

    public function render()
    {
        return view('livewire.edit-address');
    }
}
