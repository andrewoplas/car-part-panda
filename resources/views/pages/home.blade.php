@extends('layouts.default')

@section('content')
    <div class="Home">
        <div class="landing">
            <div class="container main-content">
                <h1 class="header">
                    Where teams <br/>design together.
                </h1>

                <p class="subheader">Design, prototype, and collaborate <br/> all in the browser—with Figma.</p>

                <div class="store-container">
                    <img src="{{ asset('images/app-store.png') }}" alt="app store">
                    <img src="{{ asset('images/play-store.png') }}" alt="play store">
                </div>

                <x-button class="large semi" title="Plaats een zoekertje"></x-button>
            </div>
        </div>

        <div class="second-row ">
            <div class="container">
                <div class="category-list">
                    <div class="category">
                        <p class="header">AUTO’S</p>
                        <p class="item">Volkswagen</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <a class="show-all" href="javascript:void(0)">Toon alles</a>
                    </div>
                    <div class="category">
                        <p class="header">AUTO’S</p>
                        <p class="item">Volkswagen</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <a class="show-all" href="javascript:void(0)">Toon alles</a>
                    </div>
                    <div class="category">
                        <p class="header">AUTO’S</p>
                        <p class="item">Volkswagen</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <a class="show-all" href="javascript:void(0)">Toon alles</a>
                    </div>
                    <div class="category">
                        <p class="header">AUTO’S</p>
                        <p class="item">Volkswagen</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <a class="show-all" href="javascript:void(0)">Toon alles</a>
                    </div>
                    <div class="category hide-down-sm">
                        <p class="header">AUTO’S</p>
                        <p class="item">Volkswagen</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <p class="item">Audi</p>
                        <p class="item">Porsche</p>
                        <a class="show-all" href="javascript:void(0)">Toon alles</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="third-row">
            <div class="container">
                <h3 class="header">Onze selectie van de week</h3>
                <p class="subheader">Design, prototype, and collaborate all in the browser—with Figma.</p>

                <div class="list">
                    @for($i=0; $i<6; $i++)
                        <x-product-card-horizontal
                                image="wheel-thumbnail.png"
                                alt="thumbnail"
                                title="Nissan Skyline R34"
                                price="25.000"
                                kilometers="30.000"
                                year="2016"
                                location="2230 Wezemaal, België"
                                class="{{$i > 2 ? 'hide-on-mobile' : '' }}"
                        ></x-product-card-horizontal>
                    @endfor
                </div>
                <div class="list-dots">
                    <i class="fa fa-circle circle current"></i>
                    <i class="fa fa-circle circle"></i>
                </div>

                <div class="download-app">
                    <h3 class="header">Where teams design together.</h3>
                    <p class="subheader">Design, prototype, and collaborate all in the browser—with Figma.</p>

                    <div class="store-container">
                        <img src="{{ asset('images/app-store.png') }}" alt="app store">
                        <img src="{{ asset('images/play-store.png') }}" alt="play store">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
