<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioButton extends Component
{
    public $id;
    public $name;
    public $title;
    public $value;
    public $checked;
    public $class;

    public function __construct($id, $name, $title, $value, $checked = false, $class = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;
        $this->value = $value;
        $this->checked = $checked;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.radio-button');
    }
}
