<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Item extends Component
{
    public function render()
    {
        return view('livewire.item');
    }

    public function mount($items)
    {
        $this->items = $items;
    }
}
