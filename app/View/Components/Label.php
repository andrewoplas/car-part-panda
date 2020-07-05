<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Label extends Component
{
    public $title;
    public $class;

    public function __construct($title, $class = '')
    {
        $this->title = $title;
        $this->class = $class;
    }


    public function render()
    {
        return view('components.label');
    }
}
