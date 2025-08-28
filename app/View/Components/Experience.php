<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Experience extends Component
{
    public $title;
    public $experiences;

    public function __construct($title = 'Experiência Profissional', $experiences = [])
    {
        $this->title = $title;
        $this->experiences = $experiences;
    }

    public function render()
    {
        return view('components.experience');
    }
}
