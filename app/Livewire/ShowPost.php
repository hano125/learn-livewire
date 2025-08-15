<?php

namespace App\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public $message;
    public $message1;
    public $message2;


    public function mount()
    {
        $this->fill([
            "message" => "this is message ",
            "message1" => "this is message 1",
            "message2" => "this is message 2",

        ]);
    }
    public function render()
    {
        return view('livewire.show-post');
    }
}
