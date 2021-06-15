<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithPagination;

class AdminDashboard extends Component
{
    use WithPagination;

    public $search;

    public function delete($idProduct) {
        $product = Product::find($idProduct);
        $product->delete();
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.admin-dashboard', [
                'products' => Product::where('name','like','%'.$this->search.'%')->paginate(5),
            ]);
        } else {
            abort(404);
        }
    }
}

