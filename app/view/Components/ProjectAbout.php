<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectAbout extends Component
{
    public string $text;

    public function __construct(
        string $text = 'Warm and bright cabin, perfect for nature lovers surrounded by trees and lakes.'
    ) {
        $this->text = $text;
    }

    public function render()
    {
        return view('components.project-about');
    }
}