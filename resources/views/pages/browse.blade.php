@extends('layouts.default')

@section('content')
    <div class="Browse">
        <div class="filter">

            <div class="filter-item">
                <x-label class="space-bottom" title="MERK"></x-label>
                <x-select
                        class="block"
                        placeholder="Toon alle merken"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="MODEL"></x-label>
                <x-select
                        class="block"
                        placeholder="Toon alle modellen"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="EDITIE"></x-label>
                <x-select
                        class="block"
                        placeholder="Toon alle edities"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="KOETSWERK"></x-label>
                <x-select
                        class="block"
                        placeholder="Geen voorkeur"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="DEUREN"></x-label>
                <x-select
                        class="block"
                        placeholder="Geen voorkeur"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="PRIJS" value="Vanaf € 17.500"></x-label>
                <x-range value="0"></x-range>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="BOUWJAAR" value="Alles"></x-label>
                <x-range value="0"></x-range>
            </div>

            <div class="filter-item">
                <x-label class="space-bottom" title="KILOMETERSTAND" value="Alles"></x-label>
                <x-range value="0"></x-range>
            </div>

            <div class="filter-item checkbox">
                <x-label class="space-bottom" title="AANKRUISVAKKEN"></x-label>

                <div class="group">
                    <x-checkbox title="Enkel velgen met banden"></x-checkbox>
                    <x-checkbox title="Enkel velgen met banden"></x-checkbox>
                </div>
            </div>

            <div class="filter-item checkbox">
                <x-label class="space-bottom" title="RADIO BUTTONS"></x-label>

                <div class="group">
                    <x-radio-button id="optie-1" value="optie-1" name="optie" title="Optie 1"></x-radio-button>
                    <x-radio-button id="optie-2" value="optie-2" name="optie" title="Optie 2"></x-radio-button>
                    <x-radio-button id="optie-3" value="optie-3" name="optie" title="Optie 3"></x-radio-button>
                </div>
            </div>

        </div>

        <div class="main-content">
            <x-breadcrumbs
                    :links="[
                        ['name' => 'Home', 'href' => '/', 'is_current' => false],
                        ['name' => 'Te koop', 'href' => '#', 'is_current' => false],
                        ['name' => 'Auto’s', 'href' => '#', 'is_current' => true]
                        ]"
            ></x-breadcrumbs>

            <div class="horizontal-banner"></div>

            <div class="results">
                <x-results-header count="523" class="results-header"></x-results-header>

                <x-button title="Filter" class="block hide-up-md"></x-button>

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

            <x-pagination class="pagination"></x-pagination>
        </div>

        <div class="advertisement">
            <div class="vertical-banner"></div>
        </div>
    </div>
@endsection
