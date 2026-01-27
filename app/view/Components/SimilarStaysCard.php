<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SimilarStaysCard extends Component
{
    public array $projects;

    public function __construct()
    {
        $this->projects = [
            [
                'image' => 'images/stay-1.jpg',
                'title' => 'Brightwoods Cabin',
                'location' => 'Ontario, Canada',
                'price' => '$658 / night',
            ],
            [
                'image' => 'images/stay-3.jpg',
                'title' => 'Forestville Cottages',
                'location' => 'Ontario, Canada',
                'price' => '$485 / night',
            ],
            [
                'image' => 'images/stay-4.jpg',
                'title' => 'Unionville Lodge',
                'location' => 'Ontario, Canada',
                'price' => '$325 / night',
            ],
        ];
    }

    public function render()
    {
        return view('components.similar-stays-card');
    }
}