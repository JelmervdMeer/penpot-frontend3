<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StaysSection extends Component
{
    public array $stays;

    public function __construct()
    {
        $this->stays = [
            [
                'title' => 'Brightwoods Cabin',
                'location' => 'Ontario, Canada',
                'price' => '$658 / night',
                'rating' => '4.9',
                'image' => '/images/stay-1.jpg',
            ],
            [
                'title' => 'Urban Loft',
                'location' => 'Toronto, Canada',
                'price' => '$420 / night',
                'rating' => '4.7',
                'image' => '/images/stay-2.jpg',
            ],
            [
                'title' => 'Forest Retreat',
                'location' => 'British Columbia',
                'price' => '$510 / night',
                'rating' => '4.8',
                'image' => '/images/stay-3.jpg',
            ],
            [
                'title' => 'Lakeview Cottage',
                'location' => 'Alberta, Canada',
                'price' => '$730 / night',
                'rating' => '5.0',
                'image' => '/images/stay-4.jpg',
            ],
              [
                'title' => 'Missisauga Airstream',
                'location' => 'Missisauga, Ontario',
                'price' => '$502 / night',
                'rating' => '4.8',
                'image' => '/images/stay-5.jpg',
            ],
            [
                'title' => 'Niagara Homes',
                'location' => 'Niagara, Ontario',
                'price' => '$555 / night',
                'rating' => '4.7',
                'image' => '/images/stay-6.jpg',
            ],
            [
                'title' => 'Sunny Estate',
                'location' => 'Barcort, Ontario',
                'price' => '$658 / night',
                'rating' => '4.8',
                'image' => '/images/stay-7.jpg',
            ],
            [
                'title' => 'Lawrence Hills',
                'location' => 'Lawrence, Algonquin',
                'price' => '$658 / night',
                'rating' => '4.0',
                'image' => '/images/stay-8.jpg',
            ],
              [
                'title' => 'Simcoe Lake Lodge',
                'location' => 'Simcoe Ontario',
                'price' => '$395 / night',
                'rating' => '5.0',
                'image' => '/images/stay-9.jpg',
            ],
            [
                'title' => 'Wasaga Beach Home',
                'location' => 'Georgina Bay, Ontario',
                'price' => '$385 / night',
                'rating' => '4.9',
                'image' => '/images/stay-10.jpg',
            ],
            [
                'title' => 'Banff Hills',
                'location' => 'Banff, Alberta',
                'price' => '$808 / night',
                'rating' => '5.0',
                'image' => '/images/stay-11.jpg',
            ],
            [
                'title' => 'Emerald Lake Lodge',
                'location' => 'Yoho National Park',
                'price' => '$980 / night',
                'rating' => '4.8',
                'image' => '/images/stay-12.jpg',
            ],
              [
                'title' => 'Kawartha Lakes',
                'location' => 'Kwartha, BC',
                'price' => '$888 / night',
                'rating' => '4.7',
                'image' => '/images/stay-13.jpg',
            ],
            [
                'title' => 'Golden Lodge',
                'location' => 'Golden, BC',
                'price' => '$708 / night',
                'rating' => '5.0',
                'image' => '/images/stay-14.jpg',
            ],
            [
                'title' => 'Elora Estate',
                'location' => 'Elora, Ontario',
                'price' => '$205 / night',
                'rating' => '4.8',
                'image' => '/images/stay-15.jpg',
            ],
            [
                'title' => 'Downdown Codo',
                'location' => 'Toronto, Ontario',
                'price' => '$658 / night',
                'rating' => '4.9',
                'image' => '/images/stay-16.jpg',
            ],
        ];
    }

    public function render()
    {
        return view('components.stays-section');
    }
}