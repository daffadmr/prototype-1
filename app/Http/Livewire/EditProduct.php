<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class EditProduct extends Component
{
    public $product, $idProduct;
    public $is_ready = "1";

    public function mount($id) {
        $detailProduct = Product::find($id);

        if ($detailProduct) {
            $this->product = $detailProduct;
            $this->idProduct = $detailProduct->id;
            $this->is_ready = $detailProduct->is_ready;
        }
    }

    public function editStock() {
        $detailProduct = Product::find($this->idProduct);

        if ($detailProduct) {
            $detailProduct->update([
                'is_ready' => $this->is_ready,
            ]);

            return redirect()->route('admin-product');
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.edit-product');
        } else {
            abort(404);
        }
    }
}
