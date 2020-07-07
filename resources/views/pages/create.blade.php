@extends('layouts.default', ['body' => 'white'])

@section('content')
    <div class="Create">
        <div class="wrapper">
            <div class="main-content">
                <h3 class="create-title">Wat wil je <span class="alt">verkopen?</span></h3>
                <p class="create-subheader">+10 000 members design, prototype, and collaborate all in the browser—with
                    Figma.</p>

                <div class="list">
                    <a href="part/1" class="item part">
                        <img src="{{ asset('images/part.svg') }}" class="icon" alt="icon"/>
                        <span class="title">Onderdeel</span>
                    </a>

                    <a href="rims" class="item rims">
                        <img src="{{ asset('images/rim.svg') }}" class="icon" alt="icon"/>
                        <span class="title">Velgen</span>
                    </a>

                    <a href="tires" class="item tires">
                        <img src="{{ asset('images/tire.svg') }}" class="icon" alt="icon"/>
                        <span class="title">Banden</span>
                    </a>

                    <a href="car" class="item car">
                        <img src="{{ asset('images/car.svg') }}" class="icon" alt="icon"/>
                        <span class="title">Auto</span>
                    </a>

                    <a href="accessory" class="item accessory">
                        <img src="{{ asset('images/accessory.svg') }}" class="icon" alt="icon"/>
                        <span class="title">Accessoire</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection