<?php

namespace App\Http\Livewire;

use App\Models\League;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar', [
            'leagues' => League::all()
        ]);
    }
}
