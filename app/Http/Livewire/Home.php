<?php

namespace App\Http\Livewire;

use App\Models\League;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'leagues' => League::all(),
            'products' => Product::take(5)->get()
        ]);
    }
}