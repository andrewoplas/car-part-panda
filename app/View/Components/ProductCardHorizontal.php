<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCardHorizontal extends Component
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
    public $canFavorite;
    public $class;

    public function __construct(
        $image,
        $alt,
        $title,
        $price,
        $kilometers,
        $year,
        $location = '',
        $bidding = false,
        $bid = null,
        $favorite = false,
        $canFavorite = false,
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
        $this->canFavorite = $canFavorite;
        $this->favorite = $favorite;
    }

    public function render()
    {
        return view('components.product-card-horizontal');
    }
}
