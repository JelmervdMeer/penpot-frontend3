<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SimilarStays extends Component
{
    public array $projects;

    public function __construct()
    {
        $this->projects = [
            [
                'image' => 'images/project-6.jpg',
                'title' => 'Brightwoods Cabin',
                'location' => 'Ontario, Canada',
                'price' => '$658 / night',
            ],
            [
                'image' => 'images/project-7.jpg',
                'title' => 'Forestville Cottages',
                'location' => 'Ontario, Canada',
                'price' => '$485 / night',
            ],
            [
                'image' => 'images/project-8.jpg',
                'title' => 'Unionville Lodge',
                'location' => 'Ontario, Canada',
                'price' => '$325 / night',
            ],
        ];
    }

    public function render()
    {
        return view('components.similar-stays');
    }
}