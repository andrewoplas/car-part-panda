@extends('layouts.default', ['body' => 'white'])

@section('content')
    <div class="SettingsChangePassword">
        <div class="container vertical-space">
            <x-breadcrumbs
                    :links="[
                        ['name' => 'Account', 'href' => '/profile'],
                        ['name' => 'Wachtwoord', 'href' => '#', 'is_current' => true]
                    ]"
            ></x-breadcrumbs>

            <div class="main-content">
                <div class="sidebar">
                    <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="user avatar"/>
                    <x-label title="ACCOUNT" class="header header-label"></x-label>

                    <div class="links space-1">
                        <a href="#" class="item">Mijn zoekertjes</a>
                        <a href="#" class="item">Favorieten</a>
                        <a href="#" class="item">Mijn biedingen</a>
                    </div>

                    <div class="links space-2">
                        <a href="#" class="item">Wijzig profiel</a>
                        <a href="#" class="item active">Wachtwoord</a>
                        <a href="#" class="item">Voorkeuren</a>
                        <a href="#" class="item disabled">Afmelden</a>
                    </div>
                </div>

                <div class="content">
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
            </div>
        </div>
    </div>
@endsection