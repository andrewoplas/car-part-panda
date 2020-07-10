@extends('layouts.default')

@section('content')
    <div class="SettingsMenu">
        <div class="main-content">
            <img src="{{ asset('images/avatar.png') }}" class="Avatar center" alt="user avatar"/>
            <h3 class="name">Seppe Boudringhien</h3>
            <div class="menu-list">
                <a href="/settings/zoekertjes" class="item">Mijn zoekertjes</a>
                <a href="/settings/favorieten" class="item">Favorieten</a>
                <a href="/settings/biedingen" class="item">Mijn biedingen</a>
                <a href="/settings/wijzig-profiel" class="item">Wijzig profiel</a>
                <a href="/settings/wachtwoord" class="item">Wachtwoord</a>
                <a href="/settings/voorkeuren" class="item">Voorkeuren</a>
                <a href="/" class="item">Afmelden</a>
            </div>
        </div>
    </div>
@endsection