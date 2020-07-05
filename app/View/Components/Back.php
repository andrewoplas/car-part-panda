<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Back extends Component
{
    public $link;
    public $title;
    public $class;

    public function __construct($link, $title, $class = '')
    {
        $this->link = $link;
        $this->title = $title;
        $this->class = $class;
    }
    
    public function render()
    {
        return view('components.back');
    }
}
