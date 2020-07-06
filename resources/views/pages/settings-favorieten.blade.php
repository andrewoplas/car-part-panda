@extends('layouts.settings', ['pageName' => 'Favorieten'])

@section('settings-content')
    <div class="SettingsFavorieten">
        <h3 class="page-title">Favorieten</h3>

        <div class="list">
            @for($i=0; $i<5; $i++)
                <x-product-card-vertical
                        image="wheel-thumbnail.png"
                        alt="thumbnail"
                        title="Nissan Skyline R34"
                        price="25.000"
                        year="2016"
                        location="2230 Wezemaal, België"
                        favorite
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
                        location="2230 Wezemaal, België"
                        favorite
                ></x-product-card-horizontal>
            @endfor
        </div>

        <x-pagination class="pagination"></x-pagination>
    </div>
@endsection