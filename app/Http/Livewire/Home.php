<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\League;
use App\Models\Product;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'leagues' => League::all(),
            'products' => Product::take(6)->get()
        ]);
    }
}
