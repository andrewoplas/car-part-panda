@extends('layouts.create', ['backPageLink' => '/create', 'backPageName' => 'Terung'])

@section('create-content')
    <div class="CreateAccessory">
        <h3 class="create-title">Welk accessoire wil je <span class="alt">verkopen?</span></h3>

        <x-select class="block large-spacing"
                  placeholder="Maak je keuze"
                  :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']">
        </x-select>

        <x-button class="btn-submit" title="Bewaren"></x-button>
    </div>
@endsection