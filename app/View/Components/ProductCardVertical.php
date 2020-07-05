<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCardVertical extends Component
{
    public $image;
    public $alt;
    public $title;
    public $price;
    public $kilometers;
    public $year;
    public $location;
    public $class;

    public function __construct(
        $image,
        $alt,
        $title,
        $price,
        $kilometers,
        $year,
        $location,
        $class = ''
    )
    {
        $this->class = $class;
        $this->image = $image;
        $this->alt = $alt;
        $this->title = $title;
        $this->price = $price;
        $this->kilometers = $kilometers;
        $this->year = $year;
        $this->location = $location;
    }

    public function render()
    {
        return view('components.product-card-vertical');
    }
}
