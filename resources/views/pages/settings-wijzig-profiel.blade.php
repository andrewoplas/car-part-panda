@extends('layouts.settings', ['pageName' => 'Wijzig Profiel'])

@section('settings-content')
    <div class="SettingsWijzigProfiel">
        <h3 class="page-title">Wijzig profiel</h3>

        <div class="form">
            <div class="item">
                <x-label class="space-bottom" title="VOORNAAM"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="FAMILIENAAM"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item gebruikersnaam">
                <x-label class="space-bottom" title="GEBRUIKERSNAAM"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="WOONPLAATS"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="LAND"></x-label>
                <x-input class="block"></x-input>
            </div>
        </div>

        <x-button title="Bewaar profiel" class="large btn-submit"></x-button>
    </div>
@endsection