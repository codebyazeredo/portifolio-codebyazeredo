<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Skills extends Component
{
    public $title;
    public $categories;

    public function __construct($title = 'Competências Técnicas', $categories = [])
    {
        $this->title = $title;
        $this->categories = $categories;
    }

    public function render()
    {
        return view('components.skills');
    }
}
