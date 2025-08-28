<?php

namespace App\View\Components;

use Illuminate\View\Component;

class About extends Component
{
    public $title;
    public $paragraphs;
    public $skills;

    public function __construct(
        $title = 'Sobre Mim',
        $paragraphs = [],
        $skills = []
    ) {
        $this->title = $title;
        $this->paragraphs = $paragraphs;
        $this->skills = $skills;
    }

    public function render()
    {
        return view('components.about');
    }
}
