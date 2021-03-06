<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{

    protected $project;

    public function mount($project){
        $this->project = $project;

    }


    public function render()
    {
        $project = $this->project;
        return view('livewire.projects.show',[
            'project' => $project
        ]);
    }
}