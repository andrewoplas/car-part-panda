<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $class;
    public $options;
    public $placeholder;

    public function __construct(string $placeholder, string $class = '', array $options = [])
    {
        $this->class = $class;
        $this->options = $options;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.select');
    }
}
