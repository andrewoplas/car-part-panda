<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $value;
    public $placeholder;
    public $rows;
    public $class;

    public function __construct($value = '', $placeholder = '', $rows = 7, $class = '')
    {
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.textarea');
    }
}
