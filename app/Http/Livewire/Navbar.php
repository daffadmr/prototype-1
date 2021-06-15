<?php

namespace App\Http\Livewire;

use App\Models\League;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.navbar', [
            'leagues' => League::all(),
            'user' => User::where(Auth::id(), 'user_id')
        ]);
    }
}
