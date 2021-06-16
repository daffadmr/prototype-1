<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PembayaranSukses extends Component
{
    public function render()
    {
        if(Auth::user()->is_admin == 0) {
            return view('livewire.pembayaran-sukses');
        } else {
            abort(404);
        }
    }
}
