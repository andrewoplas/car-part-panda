<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $title;
    public $checked;
    public $class;

    public function __construct($title, $checked = false, $class = '')
    {
        $this->title = $title;
        $this->checked = $checked;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
