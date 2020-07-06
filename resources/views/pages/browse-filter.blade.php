@extends('layouts.default')

@section('content')
    <div class="Browse mobile">
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
    </div>
@endsection
