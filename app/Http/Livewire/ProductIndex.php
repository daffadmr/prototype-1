<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.product-index', [
            'products' => Product::where('name','like','%'.$this->search.'%')->paginate(8),
        ]);
    }
}
