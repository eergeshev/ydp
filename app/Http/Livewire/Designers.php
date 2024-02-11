<?php

namespace App\Http\Livewire;

use App\Models\Designer;
use Livewire\Component;

class Designers extends Component
{
    public $d_amount = 6;

    public function render()
    {
        $designers = Designer::take($this->d_amount)->orderBy('id', 'desc')->get();

        return view('livewire.designers', compact('designers'));
    }

    public function load(){
        $this->d_amount += 3;
    }
}
