@extends('layouts.default', ['body'=>'white'])

@section('content')
    <div class="Detail">
        <div class="container vertical-space">
            <div class="header">
                <x-back link="#" title="Terug naar lijst"></x-back>

                <div class="button-controls">
                    <div class="button-controls">
                        <x-button-icon class="item gray" icon="far fa-chevron-left"></x-button-icon>
                        <x-button-icon class="item" icon="far fa-chevron-right"></x-button-icon>
                    </div>
                </div>
            </div>

            <div class="main-details">
                <div class="left">
                    <h3 class="title">Nissan Skyline R34</h3>
                    <p class="year">2016</p>
                    <p class="price">€ 25.000</p>
                    <div class="main-image"></div>
                    <div class="thumbnails">
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                    </div>
                </div>

                <div class="right">
                    <div class="button-controls">
                        <x-button class="white icon semi item" title="Delen" icon="fas fa-share-alt"></x-button>
                        <x-button class="icon item" title="Favoriet" icon="far fa-star"></x-button>
                    </div>

                    <div class="block-placeholder placeholder"></div>

                    <div class="contact">
                        <div class="user-information">
                            <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="user avatar"/>
                            <div class="group">
                                <p class="name">Seppe Boudringhien</p>
                                <span class="address">Wezemaal, België</span>
                            </div>
                            <x-button class="green btn-contact full" title="Contacteer"></x-button>
                            <x-button class="green btn-contact small" title="M"></x-button>
                        </div>

                        <div class="product-information">
                            <div class="item">
                                <img src="{{ asset('images/speed-gauge.svg') }}" class="icon" alt="icon"/>
                                <span class="value">24.350 <span class="alt">km</span></span>
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/fuel-full.svg') }}" class="icon" alt="icon"/>
                                <span class="value">185 PK<span class="alt">Elektrisch / Benzine</span></span>
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/calendar-check.svg') }}" class="icon" alt="icon"/>
                                <span class="value">02/2016</span>
                            </div>
                        </div>

                        <p class="status">31 dagen geleden | 3.210 keer bekeken</p>
                    </div>
                </div>
            </div>

            <div class="other-details">
                <div class="left">
                    <div class="details">
                        <span class="Label header">DETAILS</span>
                        <div class="content column">
                            <div class="item">
                                <span class="label">Merk</span>
                                <span class="value">Volkswagen</span>
                            </div>
                            <div class="item">
                                <span class="label">Model</span>
                                <span class="value">Golf</span>
                            </div>
                            <div class="item">
                                <span class="label">Editie</span>
                                <span class="value">MK2 (1983 - 1992)</span>
                            </div>
                            <div class="item">
                                <span class="label">Bouwjaar</span>
                                <span class="value">1987</span>
                            </div>
                            <div class="item">
                                <span class="label">Kilometerstand</span>
                                <span class="value">6000 km</span>
                            </div>
                            <div class="item">
                                <span class="label">Koetswerk</span>
                                <span class="value">Hatchback</span>
                            </div>
                            <div class="item">
                                <span class="label">Deuren</span>
                                <span class="value">3</span>
                            </div>
                            <div class="item">
                                <span class="label">Kleur</span>
                                <span class="value">Grijs</span>
                            </div>
                            <div class="item">
                                <span class="label">Transmissie</span>
                                <span class="value">Manueel</span>
                            </div>
                            <div class="item">
                                <span class="label">Versnellingen</span>
                                <span class="value">5</span>
                            </div>
                            <div class="item">
                                <span class="label">Keuring</span>
                                <span class="value">Door verkoper</span>
                            </div>
                            <div class="item">
                                <span class="label">Aandrijving</span>
                                <span class="value">Benzine</span>
                            </div>
                            <div class="item">
                                <span class="label">CO2-uitstoot</span>
                                <span class="value">101 gr</span>
                            </div>
                            <div class="item">
                                <span class="label">Vermogen</span>
                                <span class="value">362 kW / 185 PK</span>
                            </div>
                            <div class="item">
                                <span class="label">Motorinhoud</span>
                                <span class="value">2300 cc</span>
                            </div>
                        </div>
                    </div>

                    <div class="block-placeholder placeholder">
                    </div>

                    <div class="details">
                        <span class="Label header">OPTIES</span>
                        <div class="content">
                            <p class="text-dark-gray">
                                Airco, alarm, bluetooth, elektrische ramen
                                vooraan, lichtmetalen velgen, metallic lak, open dak, radio & cd,
                                stuurbekrachtiging
                            </p>
                        </div>
                    </div>

                    <div class="details">
                        <span class="Label header">OMSCHRIJVING</span>
                        <div class="content">
                            <p class="text-dark-gray">
                                Er zijn wel enkele dingen die nog moeten gebeuren vooraleer ze op Belgische platen kan
                                komen.
                                In Nederland is ze eind vorig jaar wel nog blanco gekeurd maar de Belgische wetgeving
                                doet natuurlijk weer eens moeilijk.
                                Dus kortom de auto is mechanisch in orde en heeft alle papieren dus het
                                zwaarste/moeilijkste is al achter de rug.
                            </p>
                        </div>
                    </div>

                    <div class="user-location">
                        <div class="header">
                            <div class="user-information">
                                <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="user avatar"/>

                                <div class="group">
                                    <p class="name">Seppe Boudringhien</p>
                                    <span class="address">Wezemaal, België</span>
                                </div>

                                <x-button class="green btn-contact" title="Contacteer"></x-button>

                                <div class="button-controls">
                                    <x-button class="block item" title="Bekijk profiel"></x-button>
                                    <x-button class="green block item" title="Stuur een bericht"></x-button>
                                </div>
                            </div>
                        </div>
                        <div class="map"></div>
                    </div>

                </div>
                <div class="right">
                    <div class="list">
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

                    <a class="Back hide-on-mobile" href="#">
                        <i class="far fa-chevron-left icon"></i>
                        <span class="title">Terug naar lijst</span>
                    </a>

                    <div class="block-placeholder placeholder hide-down-sm"></div>
                </div>
            </div>

            <div class="header mobile">
                <x-back link="#" title="Terug naar lijst"></x-back>

                <div class="button-controls">
                    <x-button-icon class="item gray" icon="far fa-chevron-left"></x-button-icon>
                    <x-button-icon class="item" icon="far fa-chevron-right"></x-button-icon>
                </div>
            </div>
        </div>
    </div>
@endsection