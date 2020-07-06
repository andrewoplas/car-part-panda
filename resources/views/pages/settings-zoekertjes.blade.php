@extends('layouts.settings', ['pageName' => 'Mijn zoekertjes'])

@section('settings-content')
    <div class="SettingsZoekertjes">
        <h3 class="page-title">Mijn zoekertjes</h3>

        <div class="list">
            @for($i=0; $i<6; $i++)
                <x-product-card-vertical
                        image="wheel-thumbnail.png"
                        alt="thumbnail"
                        title="Nissan Skyline R34"
                        price="25.000"
                        year="2016"
                        bid="Geen biedingen"
                        isBidding
                ></x-product-card-vertical>
            @endfor
        </div>

        <div class="list mobile">
            @for($i=0; $i<4; $i++)
                <x-product-card-horizontal
                        image="wheel-thumbnail.png"
                        alt="thumbnail"
                        title="Nissan Skyline R34"
                        price="25.000"
                        kilometers="30.000"
                        year="2016"
                        bid="Geen biedingen"
                        isBidding
                ></x-product-card-horizontal>
            @endfor
        </div>

        <x-pagination class="pagination"></x-pagination>
    </div>
@endsection