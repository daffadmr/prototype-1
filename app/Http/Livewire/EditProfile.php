<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminates\Support\Facades\Auth;

class EditProfile extends Component
{
    public $user, $idUser, $name, $email, $address, $telephone;

    public function mount($id) {
        $userProfile = User::find($id);

        if ($userProfile) {
            $this->user = $userProfile;
            $this->idUser = $userProfile->id;
            $this->name = $userProfile->name;
            $this->email = $userProfile->email;
            $this->address = $userProfile->alamat;
            $this->telephone = $userProfile->no_hp; 
        }
    }

    public function saveProfile() {
        $userProfile = User::find($this->idUser);

        if ($userProfile) {
            $userProfile->update([
                'alamat' => $this->address,
                'no_hp' => $this->telephone,
            ]);

            return redirect()->route('user-profile', $this->idUser);
        }
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
