@extends('layouts.create', ['backPageLink' => '/create', 'backPageName' => 'Terung'])

@section('create-content')
    <div class="CreateStep1">
        <h3 class="create-title">Welk onderdeel wil je <span class="alt">verkopen?</span></h3>

        <x-select class="block large-spacing"
                  placeholder="Maak je keuze"
                  :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']">
        </x-select>

        <x-button class="btn-submit" title="Ga verder"></x-button>
    </div>
@endsection