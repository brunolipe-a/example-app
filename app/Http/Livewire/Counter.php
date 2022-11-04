<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $value = 0;

    public function add() {
        $this->value++;
    }

    public function sub() {
        $this->value--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
