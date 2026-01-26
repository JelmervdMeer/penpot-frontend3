<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectAmenities extends Component
{
    public array $amenities;

    public function __construct(array $amenities = [])
    {
        $this->amenities = $amenities ?: [
            'Wifi',
            'Kitchen',
            'Heating',
            'TV',
            'Free parking',
            'Workspace',
        ];
    }

    public function render()
    {
        return view('components.project-amenities');
    }
}