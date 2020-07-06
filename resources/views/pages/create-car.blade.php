@extends('layouts.create', ['backPageLink' => '/create', 'backPageName' => 'Terung'])

@section('create-content')
    <div class="CreateCar">
        <h3 class="create-title">Welke auto wil je <span class="alt">verkopen?</span></h3>

        <div class="normal-spacing">
            <x-label class="space-bottom" title="MERK"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <div class="normal-spacing">
            <x-label class="space-bottom" title="MODEL"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <div class="large-spacing">
            <x-label class="space-bottom" title="EDITIE"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <x-button class="btn-submit" title="Bewaren"></x-button>
    </div>
@endsection