<?php

namespace App\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class ExampleComponent extends Component
{

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.example-component');
    }
}
