<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $name, $price, $image;
    public $league = "1"; 
    public $is_ready = "1";

    public function create() {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'image|max:2048|required',
            'league' => 'required',
            'is_ready' => 'required'
        ]);

        $imageName = md5($this->image.microtime().'.'.$this->image->extension());

        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'is_ready' => $this->is_ready,
            'league_id' => $this->league,
            'product_image' => $imageName
        ]);

        $this->name = '';
        $this->price = '';
        $this->is_ready = '';
        $this->league = '';
        $this->image = '';

        return redirect()->route('admin-product');
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.create-product');
        } else {
            abort(404);
        }
    }
}
