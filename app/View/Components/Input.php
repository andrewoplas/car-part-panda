<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $value;
    public $placeholder;
    public $name;
    public $class;

    public function __construct($value = '', $placeholder = '', $name = '', $class = '')
    {
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.input');
    }
}
