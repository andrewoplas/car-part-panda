<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeSelect extends Component
{
    public $select1;
    public $select2;
    public $select3;
    public $class;

    public function __construct($select1, $select2, $select3, $class = '')
    {
        $this->select1 = $select1;
        $this->select2 = $select2;
        $this->select3 = $select3;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.three-select');
    }
}
