<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Contact extends Component
{
    public $title;
    public $subtitle;
    public $contacts;
    public $socials;

    public function __construct(
        $title = 'Entre em Contato',
        $subtitle = 'Vamos conversar sobre seu próximo projeto!',
        $contacts = [],
        $socials = []
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->contacts = $contacts;
        $this->socials = $socials;
    }

    public function render()
    {
        return view('components.contact');
    }
}
