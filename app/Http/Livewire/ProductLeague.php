<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\League;
use App\Models\Product;
use Livewire\WithPagination;

class ProductLeague extends Component
{
    use WithPagination;

    public $league, $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function mount($id) {
        $leagueDetail = League::find($id);

        if ($leagueDetail) {
            $this->league = $leagueDetail;
            $this->leagueName = $leagueDetail->name;
        }
    }

    public function render()
    {
        return view('livewire.product-league', [
            'product' => Product::where('league_id', $this->league->id)->where('name','like','%'.$this->search.'%')->paginate(8),
            'title' => $this->league->league_name
        ]);
    }
}
