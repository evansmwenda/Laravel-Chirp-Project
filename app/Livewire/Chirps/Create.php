<?php

namespace App\Livewire\Chirps;

use Livewire\Component;

class Create extends Component
{
    public $message;

    public function store()
    {
        //store data to db
        dd($this->message);
    }


    public function render()
    {
        return view('livewire.chirps.create');
    }
}
