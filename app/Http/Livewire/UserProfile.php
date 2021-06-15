<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminates\Support\Facades\Auth;

class UserProfile extends Component
{
    public $user;

    public function mount($id) {
        $userProfile = User::find($id);

        if ($userProfile) {
            $this->user = $userProfile;
        }
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
