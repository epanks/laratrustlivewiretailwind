<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Paket;

class PaketSearchBar extends Component
{
    public $query;
    public $datapaket;
    public $highlightIndex;

    public function mount()
    {
        $this->reset_input();
    }

    public function reset_input()
    {
        //$this->reset();
        $this->query = '';
        $this->datapaket = [];
        $this->highlightIndex = 0;
    }
    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->datapaket) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }
    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->datapaket) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectPaket()
    {
        $paket = $this->datapaket[$this->highlightIndex] ?? null;
        if ($paket) {
            $this->redirect(route('show-paket', $paket['id']));
        }
    }


    public function updateQuery()
    {
        $this->datapaket = Paket::where('nmpaket', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.paket-search-bar');
    }
}
