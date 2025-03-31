<?php

namespace App\Livewire;

use Livewire\Component;

class Calculate extends Component
{
    public $inputA = 0;
    public $inputB = 0;
    public $answer = 0;

    public function render()
    {
        return view('livewire.calculate');
    }

    public function countInput()
    {
	$this->answer =  $this->inputA + $this->inputB;
    }
}
