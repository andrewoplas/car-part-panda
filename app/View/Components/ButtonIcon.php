<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonIcon extends Component
{
    public $icon;
    public $class;

    public function __construct(string $icon, string $class = "")
    {
        $this->icon = $icon;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.button-icon');
    }
}
