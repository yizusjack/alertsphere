<?php

namespace App\Livewire;

use Livewire\Component;

class Terms extends Component
{
    public $display=false;
    
    public function render()
    {
        return view('livewire.terms');
    }
}
