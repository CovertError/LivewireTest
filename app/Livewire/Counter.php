<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $current = 'counter-one';
    protected $steps = [
        'counter-one',
        'counter-two',
    ];

    public function next()
    {
        $currentIndex = array_search($this->current, $this->steps);

        $this->current = $this->steps[$currentIndex + 1];
    }
    public function mount(){
        $this->current = $this->steps[0];
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
