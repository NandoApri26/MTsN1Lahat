<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $title;
    public $date;
    public $content;
    public $image;
    public function render()
    {
        return view('livewire.card');
    }
}
