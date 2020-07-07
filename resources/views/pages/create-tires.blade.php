@extends('layouts.create', ['backPageLink' => '/create', 'backPageName' => 'Terung'])

@section('create-content')
    <div class="CreateTires">
        <h3 class="create-title">Welke <span class="alt">banden</span> wil je <span class="alt">verkopen?</span></h3>

        <div class="large-spacing">
            <x-label class="badge space-bottom" title="AANTAL" value="4 STUKS"></x-label>
            <x-range value="0"></x-range>
        </div>

        <div class="normal-spacing">
            <x-label class="space-bottom" title="LAADINDEX"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <div class="normal-spacing">
            <x-label class="space-bottom" title="SNELHEIDSCATEGORIE"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <div class="normal-spacing">
            <x-label class="space-bottom" title="TYPE"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <div class="normal-spacing">
            <x-label class="space-bottom" title="MERK"></x-label>
            <x-select
                    class="block"
                    placeholder="Maak je keuze"
                    :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
            ></x-select>
        </div>

        <div class="large-spacing">
            <x-label class="badge space-bottom" title="PROFIELDIEPTE" value="5 MM"></x-label>
            <x-range value="0"></x-range>
        </div>

        <x-button class="btn-submit" title="Bewaren"></x-button>
    </div>
@endsection