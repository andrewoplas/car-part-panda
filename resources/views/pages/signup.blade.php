@extends('layouts.default', ['hideHeader' => true, 'body'=>'signup-body'])

@section('content')
    <div class="Signup">
        <div class="container">
            <div class="header">
                <img src="{{ asset('images/logo-dark.png') }}" class="logo" alt="dark logo"/>
                <p class="text-gray">Aanmelden</p>
            </div>

            <div class="main-content">
                <div class="information">
                    <img src="{{ asset('images/panda.png') }}" class="panda" alt="panda"/>
                    <h3 class="header">Where teams<br/> design together.</h3>
                    <p class="subheader">+10 000 members design,<br/> prototype, and collaborate all in<br/> the
                        browser—with Figma.</p>
                    <div class="circles">
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                    </div>
                </div>
                <div class="form">
                    <div class="item">
                        <x-label title="E-MAIL ADRES"></x-label>
                        <x-input class="block"></x-input>
                    </div>
                    <div class="item">
                        <x-label title="KIES EEN WACHTWOORD"></x-label>
                        <x-input class="block"></x-input>
                    </div>
                    <div class="item">
                        <x-label title="BEVESTIG WACHTWOORD"></x-label>
                        <x-input class="block"></x-input>
                    </div>

                    <p class="information">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel est et mauris lobortis
                        iaculis quis sit amet nulla.
                    </p>

                    <x-button title="Registreer nu" class="btn-register block large"></x-button>

                    <div class="divider">
                        <hr/>
                        <span class="text">of</span>
                    </div>

                    <x-button title="Doorgaan met Facebook" class="btn-facebook block large"></x-button>
                </div>
            </div>
        </div>
    </div>
@endsection