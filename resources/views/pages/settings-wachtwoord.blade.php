@extends('layouts.settings', ['pageName' => 'Wachtwoord'])

@section('settings-content')
    <div class="SettingsWachtwoord">
        <h3 class="page-title">Wachtwoord wijzigen</h3>

        <div class="form">
            <div class="item">
                <x-label class="space-bottom" title="NIEUW WACHTWOORD"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="HERHAAL NIEUW WACHTWOORD"></x-label>
                <x-input class="block"></x-input>
            </div>
        </div>

        <x-button title="Wijzig wachtwoord" class="large btn-submit"></x-button>
    </div>
@endsection