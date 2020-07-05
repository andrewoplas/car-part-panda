<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Range extends Component
{
    public $min;
    public $max;
    public $value;
    public $class;

    public function __construct($value = '', $min = '', $max = '', $class = '')
    {
        $this->min = $min;
        $this->max = $max;
        $this->value = $value;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.range');
    }
}
