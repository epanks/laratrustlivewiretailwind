<?php

namespace App\Http\Livewire\Paket;

use App\Paket;
use Livewire\Component;

class Index extends Component
{
    //public $datapaket;

    public function render()
    {
        $datapaket = Paket::with('progres')->where('wilayah_id', 2)->where('ta', 2020)->paginate(10);
        return view('livewire.paket.index', compact('datapaket'));
    }
}
