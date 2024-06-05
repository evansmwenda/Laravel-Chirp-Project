<?php

namespace App\Livewire\Chirps;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string|max:255')]
    public string $message;

    public function store()
    {
        //store data to db
        $validated = $this->validate();

        auth()->user()->chirps()->create($validated);

        $this->message ="";
        session()->flash('status','Chirp Created Successfully');
    }


    public function render()
    {
        return view('livewire.chirps.create');
    }
}
