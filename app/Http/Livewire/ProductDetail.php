<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{
    public $product, $quantity, $size, $note;
    
    public function mount($id) {
        $productDetail = Product::find($id);

        if ($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function shoppingCart() {
        if(!Auth::user()) {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
