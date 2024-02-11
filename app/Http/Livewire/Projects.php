<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public $amount = 3;

    public function render()
    {
        $projects = Project::take($this->amount)->orderBy('id', 'desc')->get();

        return view('livewire.projects', compact('projects'));
    }

    public function load()
    {
        $this->amount += 3;
    }
}
