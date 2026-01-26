<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectHero extends Component
{
    public string $image;

    public function __construct(string $image = 'images/project-main.jpg')
    {
        $this->image = $image;
    }

    public function render()
    {
        return view('components.project-hero');
    }
}