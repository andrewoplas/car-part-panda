<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResultsHeader extends Component
{
    public $count;
    public $class;

    public function __construct($count, $class = '')
    {
        $this->count = $count;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.results-header');
    }
}
