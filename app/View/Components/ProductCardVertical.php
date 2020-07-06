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
    public $bidding;
    public $bid;
    public $favorite;
    public $class;

    public function __construct(
        $image,
        $alt,
        $title,
        $price,
        $kilometers = null,
        $year = null,
        $location = null,
        $bidding = false,
        $bid = null,
        $favorite = false,
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
        $this->bidding = $bidding;
        $this->bid = $bid;
        $this->favorite = $favorite;
    }

    public function render()
    {
        return view('components.product-card-vertical');
    }
}
