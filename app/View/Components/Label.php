<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Label extends Component
{
    public $title;
    public $value;
    public $class;

    public function __construct($title, $value = null, $class = '')
    {
        $this->title = $title;
        $this->value = $value;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.label');
    }
}
