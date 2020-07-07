@extends('layouts.create', ['backPageLink' => '/create/step/1', 'backPageName' => 'Kies ander onderdeel'])

@section('create-content')
    <div class="CreatePart2">
        <h3 class="create-title">Van welke auto wil je een <span class="alt">aandrijfasbout verkopen??</span></h3>

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

        <div class="divider">
            <hr/>
            <span class="text">OF</span>
        </div>

        <x-button class="disabled block btn-universal-part" title="Universeel onderdeel"></x-button>

        <x-button class="btn-submit" title="Bewaren"></x-button>
    </div>
@endsection