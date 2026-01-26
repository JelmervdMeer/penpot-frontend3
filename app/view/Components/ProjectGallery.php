<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectGallery extends Component
{
    public array $images;

    public function __construct()
    {
        $this->images = [
            'images/project-1.jpg',
            'images/project-2.jpg',
            'images/project-3.jpg',
            'images/project-4.jpg',
            'images/project-5.jpg'
        ];
    }

    public function render()
    {
        return view('components.project-gallery');
    }
}
