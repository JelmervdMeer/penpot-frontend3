<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StayCard extends Component
{
    public string $image;
    public string $title;
    public string $location;
    public string $price;

    public function __construct(
        string $image = 'images/stay-1.jpg',
        string $title = 'Sample stay',
        string $location = 'Unknown location',
        string $price = '$100'
    ) {
        $this->image = $image;
        $this->title = $title;
        $this->location = $location;
        $this->price = $price;
    }

    public function render()
    {
        return view('components.stay-card');
    }
}