<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $name;
    public $title;
    public $subtitle;
    public $location;
    public $ctaPrimary;
    public $ctaSecondary;
    public $socials;

    public function __construct(
        $name = 'Matheus de Azeredo',
        $title = 'Olá, eu sou',
        $subtitle = 'Desenvolvedor de Software Full Stack Web & IOT PHP/Laravel/Laminas, Java/Spring e JavaScript',
        $location = 'Criciúma, SC',
        $ctaPrimary = [],
        $ctaSecondary = [],
        $socials = []
    ) {
        $this->name = $name;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->location = $location;
        $this->ctaPrimary = $ctaPrimary;
        $this->ctaSecondary = $ctaSecondary;
        $this->socials = $socials;
    }

    public function render()
    {
        return view('components.hero');
    }
}
