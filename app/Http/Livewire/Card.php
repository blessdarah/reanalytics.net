<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public string $title;
    public string $body;
    public string $route;
    public string $linkText = '';
    
    public function render()
    {
        return view('livewire.card');
    }
}
