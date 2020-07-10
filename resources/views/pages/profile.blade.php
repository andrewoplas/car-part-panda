@extends('layouts.default')

@section('content')
    <div class="Profile">
        <div class="container vertical-space">
            <div class="main-content">
                <div class="profile">
                    <div class="top">
                        <div>
                            <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="user avatar"/>
                            <h3 class="name">Gino Deschuyteneer </h3>
                            <p class="location">Sint-Pieters-Leeuw</p>

                            <x-button class="green block btn-send-message" title="Stuur bericht"></x-button>

                            <p class="information">Airco, alarm, bluetooth, elektrische ramen vooraan, lichtmetalen
                                velgen, metallic lak, open dak, radio & cd, stuurbekrachtiging</p>

                            <p class="membership-status">Lid sinds oktober 2019</p>
                        </div>
                        <div class="map"></div>
                    </div>
                    <div class="block-placeholder placeholder hide-on-mobile"></div>
                </div>
                <div class="classifieds">
                    <p class="header">Zoekertjes van Gino</p>

                    <x-results-header count="523" class="results-header"></x-results-header>

                    <div class="block-placeholder placeholder"></div>

                    <div class="list">
                        @for($i=0; $i<6; $i++)
                            <x-product-card-vertical
                                    image="wheel-thumbnail.png"
                                    alt="thumbnail"
                                    title="Nissan Skyline R34"
                                    price="25.000"
                                    kilometers="30.000"
                                    year="2016"
                                    location="2230 Wezemaal, België"
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
                            ></x-product-card-horizontal>
                        @endfor
                    </div>

                    <x-pagination class="pagination"></x-pagination>
                </div>
            </div>
        </div>
    </div>
@endsection