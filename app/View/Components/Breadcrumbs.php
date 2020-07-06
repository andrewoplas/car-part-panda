<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public $links;
    public $class;

    public function __construct($links = [], $class = '')
    {
        $this->links = $links;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.breadcrumbs');
    }
}
