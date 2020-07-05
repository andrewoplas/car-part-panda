@extends('layouts.default')

@section('content')
    <div class="Browse">
        <div class="filter">

            {{-- Merk --}}
            <div class="filter-item">
                <x-label title="MERK"></x-label>
                <x-select
                        class="block"
                        placeholder="Toon alle merken"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            {{-- Model --}}
            <div class="filter-item">
                <x-label title="MODEL"></x-label>
                <x-select
                        class="block"
                        placeholder="Toon alle modellen"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            {{-- Editie --}}
            <div class="filter-item">
                <x-label title="EDITIE"></x-label>
                <x-select
                        class="block"
                        placeholder="Toon alle edities"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            {{-- Koetswerk --}}
            <div class="filter-item">
                <x-label title="KOETSWERK"></x-label>
                <x-select
                        class="block"
                        placeholder="Geen voorkeur"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            {{-- Deuren --}}
            <div class="filter-item">
                <x-label title="DEUREN"></x-label>
                <x-select
                        class="block"
                        placeholder="Geen voorkeur"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            {{-- Prijs --}}
            <div class="filter-item">
                <div class="label-value">
                    <x-label title="PRIJS"></x-label>
                    <span class="value">Vanaf € 17.500</span>
                </div>

                <x-range value="0"></x-range>
            </div>

            {{-- Bouwjaar --}}
            <div class="filter-item">
                <div class="label-value">
                    <x-label title="BOUWJAAR"></x-label>
                    <span class="value">Alles</span>
                </div>

                <x-range value="0"></x-range>
            </div>

            {{-- Prijs --}}
            <div class="filter-item">
                <div class="label-value">
                    <x-label title="KILOMETERSTAND"></x-label>
                    <span class="value">Alles</span>
                </div>

                <x-range value="0"></x-range>
            </div>

            {{-- Aankruisvakken --}}
            <div class="filter-item checkbox">
                <x-label title="AANKRUISVAKKEN"></x-label>

                <div class="group">
                    <x-checkbox title="Enkel velgen met banden"></x-checkbox>
                    <x-checkbox title="Enkel velgen met banden"></x-checkbox>
                </div>
            </div>

            {{-- Radio Buttons --}}
            <div class="filter-item checkbox">
                <x-label title="RADIO BUTTONS"></x-label>

                <div class="group">
                    <x-radio-button id="optie-1" value="optie-1" name="optie" title="Optie 1"></x-radio-button>
                    <x-radio-button id="optie-2" value="optie-2" name="optie" title="Optie 2"></x-radio-button>
                    <x-radio-button id="optie-3" value="optie-3" name="optie" title="Optie 3"></x-radio-button>
                </div>
            </div>

        </div>

        <div class="main-content">
            <div class="breadcrumbs">
                <a href="javascript:void(0)" class="item">Home</a>
                <span class="divider">></span>
                <a href="javascript:void(0)" class="item">Te koop</a>
                <span class="divider">></span>
                <a href="javascript:void(0)" class="item current">Auto’s</a>
            </div>

            <div class="horizontal-banner"></div>

            <div class="results">
                <div class="results-header">
                    <p class="value">523 resultaten</p>
                    <p class="sort">
                        Sorteren op <strong>Datum</strong>
                        <i class="far fa-chevron-down"></i>
                    </p>
                </div>

                <a href="#" class="Button btn-filter">Filter</a>

                <div class="list">
                    @for($i=0; $i<15; $i++)
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
                    @for($i=0; $i<6; $i++)
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
            </div>

            <x-pagination></x-pagination>
        </div>

        <div class="advertisement">
            <div class="vertical-banner"></div>
        </div>
    </div>
@endsection