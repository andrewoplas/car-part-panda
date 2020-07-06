@extends('layouts.create', ['backPageLink' => '/create', 'backPageName' => 'Terung'])

@section('create-content')
    <div class="CreateRim">

        <h3 class="create-title">Welke <span class="alt">velgen</span> wil je <span class="alt">verkopen?</span></h3>

        <div class="large-spacing">
            <x-label class="badge space-bottom" title="DIAMETER" value="20 INCH"></x-label>
            <x-range value="0"></x-range>
        </div>

        <div class="large-spacing">
            <x-label class="space-bottom" title="STEEKMAAT"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <x-button class="btn-submit" title="Bewaren"></x-button>
    </div>
@endsection