@extends('layouts.default', ['body' => 'white'])

@section('content')
    <div class="SettingsLayout">
        <div class="container vertical-space">
            <x-breadcrumbs
                    :links="[
                        ['name' => 'Account', 'href' => '/profile'],
                        ['name' => $pageName, 'is_current' => true]
                    ]"
            ></x-breadcrumbs>

            <div class="main-content">
                <div class="sidebar">
                    <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="user avatar"/>
                    <x-label title="ACCOUNT" class="header header-label"></x-label>

                    <div class="links space-1">
                        <a href="/settings/zoekertjes"
                           class="item {{$uri == 'settings/zoekertjes' ? 'active' : ''}}">
                            Mijn zoekertjes
                        </a>
                        <a href="/settings/favorieten"
                           class="item {{$uri == 'settings/favorieten' ? 'active' : ''}}">
                            Favorieten
                        </a>
                        <a href="/settings/biedingen"
                           class="item {{$uri == 'settings/biedingen' ? 'active' : ''}}">
                            Mijn biedingen
                        </a>
                    </div>

                    <div class="links space-2">
                        <a href="/settings/wijzig-profiel"
                           class="item {{$uri == 'settings/wijzig-profiel' ? 'active' : ''}}">
                            Wijzig profiel
                        </a>
                        <a href="/settings/wachtwoord"

                           class="item {{$uri == 'settings/wachtwoord' ? 'active' : ''}}">
                            Wachtwoord
                        </a>
                        <a href="/settings/voorkeuren"

                           class="item {{$uri == 'settings/voorkeuren' ? 'active' : ''}}">
                            Voorkeuren
                        </a>
                        <a href="#" class="item disabled">
                            Afmelden
                        </a>
                    </div>
                </div>

                @yield('settings-content')
            </div>
        </div>
    </div>
@endsection