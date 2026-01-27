<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SimilarStaysCard extends Component
{
    public string $image;
    public string $title;
    public string $location;
    public string $price;

    public function __construct(string $image, string $title, string $location, string $price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->location = $location;
        $this->price = $price;
    }

    public function render()
    {
        return view('components.similar-stays-card');
    }
}