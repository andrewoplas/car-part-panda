@extends('layouts.default', ['body'=>'white'])

@section('content')
    <div class="AdEdit">
        <div class="container vertical-space">
            <x-back link="#" title="Mijn zoekertjes"></x-back>

            <div class="main-details">
                <div class="left">
                    <div class="product-information hide-up-md">
                        <h3 class="title">Nissan Skyline R34</h3>
                        <p class="year">2016</p>
                        <p class="price">€ 25.000</p>

                        <x-button class="block outline large btn-change-price" title="Wijzig prijs"></x-button>
                    </div>

                    <div class="main-image"></div>
                    <div class="thumbnails">
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                    </div>

                    <x-button class="block icon large btn-share hide-up-md" title="Delen"
                              icon="fas fa-share-alt"></x-button>
                </div>
                <div class="right">
                    <h3 class="title">Nissan Skyline R34</h3>
                    <p class="year">2016</p>
                    <p class="price">€ 25.000</p>

                    <x-button class="white icon btn-share" title="Delen" icon="fas fa-share-alt"></x-button>

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

                    <div class="button-controls">
                        <x-button class="block outline large item" title="Wijzig prijs"></x-button>
                        <x-button class="block large item" title="Publiceer"></x-button>
                    </div>
                </div>
            </div>

            <div class="other-details">
                <div class="details">
                    <span class="Label header">DETAILS</span>
                    <div class="content column-details">
                        <div>
                            <div class="item">
                                <div class="item">
                                    <x-label title="PRIJS"></x-label>
                                    <x-range value="0"></x-range>
                                </div>

                                <div class="item">
                                    <x-label title="KILOMETERSTAND"></x-label>
                                    <x-input class="block"></x-input>
                                </div>

                                <div class="item">
                                    <x-label title="KOETSWERK"></x-label>
                                    <x-select class="block"
                                              placeholder="Geen voorkeur"
                                              :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']">
                                    </x-select>
                                </div>
                                <div class="item">
                                    <x-label title="DEUREN"></x-label>
                                    <x-select class="block"
                                              placeholder="Geen voorkeur"
                                              :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']">
                                    </x-select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <x-label title="KILOMETERSTAND"></x-label>
                                <x-input class="block"></x-input>
                            </div>

                            <div class="item">
                                <x-label title="KOETSWERK"></x-label>
                                <x-select class="block"
                                          placeholder="Geen voorkeur"
                                          :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']">
                                </x-select>
                            </div>
                            <div class="item">
                                <x-label title="DEUREN"></x-label>
                                <x-select class="block"
                                          placeholder="Geen voorkeur"
                                          :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']">
                                </x-select>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <x-label title="AANKRUISVAKKEN"></x-label>
                                <x-checkbox class="input-group" title="Enkel velgen met banden"></x-checkbox>
                                <x-checkbox class="input-group" title="Enkel velgen met banden"
                                            checked="true"></x-checkbox>
                            </div>

                            <div class="item">
                                <x-label title="RADIO BUTTONS"></x-label>
                                <x-radio-button class="input-group" id="optie-1" value="optie-1" name="optie"
                                                title="Optie 1">
                                </x-radio-button>
                                <x-radio-button class="input-group" id="optie-2" value="optie-2" name="optie"
                                                title="Optie 2" checked="true">
                                </x-radio-button>
                                <x-radio-button class="input-group" id="optie-3" value="optie-3" name="optie"
                                                title="Optie 3">
                                </x-radio-button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <span class="Label header">OPTIES</span>
                    <div class="content column-opties">
                        @for($i=0; $i<24; $i++)
                            <x-checkbox class="input-group {{$i > 10 ? 'hide-down-sm' : ''}}"
                                        title="Enkel velgen met banden"></x-checkbox>
                        @endfor
                    </div>
                </div>



                <div class="details">
                    <span class="Label header">OMSCHRIJVING</span>
                    <div class="content">
                        <x-textarea
                                value="Er zijn wel enkele dingen die nog moeten gebeuren vooraleer ze op Belgische platen kankomen. In Nederland is ze eind vorig jaar wel nog blanco gekeurd maar de Belgische wetgeving doet natuurlijk weer eens moeilijk. Dus kortom de auto is mechanisch in orde en heeft alle papieren dus het zwaarste/moeilijkste is al achter de rug."></x-textarea>
                    </div>
                </div>

                <div class="button-controls">
                    <x-button class="green item large" title=" Bewaren
                    "></x-button>
                    <x-button class="block large disabled item hide-up-sm" title="Publiceer"></x-button>
                    <x-button class="none red item large" title="Verwijder zoekertje"></x-button>
                </div>
            </div>
        </div>
    </div>
@endsection