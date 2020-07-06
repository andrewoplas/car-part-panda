@extends('layouts.settings', ['pageName' => 'Voorkeuren'])

@section('settings-content')
    <div class="SettingsVoorkeuren">
        <h3 class="page-title">Voorkeuren</h3>

        <div class="form">
            <div class="item">
                <x-checkbox title="Ontvang meldingen per e-mail"></x-checkbox>
            </div>
            <div class="item">
                <x-checkbox
                        title="Ontvang aanbiedingen, updates en andere interessante berichten per e-mail"></x-checkbox>
            </div>
        </div>

        <x-button title="Bewaar voorkeuren" class="large btn-submit"></x-button>
    </div>
@endsection