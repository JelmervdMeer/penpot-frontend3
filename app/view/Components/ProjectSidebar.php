<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectSidebar extends Component
{
    public string $title;
    public string $location;
    public string $price;
    public string $host;

    public function __construct(
        string $title = 'Brightwoods Cabin',
        string $location = 'Ontario, Canada',
        string $price = '$658',
        string $host = 'Michelle Ward'
    ) {
        $this->title = $title;
        $this->location = $location;
        $this->price = $price;
        $this->host = $host;
    }

    public function render()
    {
        return view('components.project-sidebar');
    }
}