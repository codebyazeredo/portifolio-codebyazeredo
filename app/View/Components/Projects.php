<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Projects extends Component
{
    public array $projects;

    public function __construct(array $projects = [])
    {
        $this->projects = $projects;
    }
    
    public function render(): View
    {
        return view('components.projects');
    }
}
