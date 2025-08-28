<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $links;
    public $logo;

    public function __construct($links = [], $logo = 'images/logo.png')
    {
        $this->links = $links;
        $this->logo = $logo;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
