@extends('layouts.default', ['hideHeader'=>true,'hideFooter'=>true])

@section('content')
    <div class="Modal ModalSignup">

        <div class="content">
            <img src="{{ asset('images/close.svg') }}" class="close" alt="close"/>

            <h3 class="title">Maak een account</h3>

            <p class="information">+10 000 members design, prototype, and collaborate all in the browser—with Figma.</p>

            <div class="item">
                <x-label class="space-bottom" title="E-MAIL ADRES"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="KIES EEN WACHTWOORD"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="BEVESTIG WACHTWOORD"></x-label>
                <x-input class="block"></x-input>
            </div>

            <x-button title="Registreer nu" class="btn-register block large not-rounded glow"></x-button>

            <div class="divider">
                <hr/>
                <span class="text">of</span>
            </div>

            <x-button title="Doorgaan met Facebook" class="btn-facebook block large not-rounded"
                      icon="fab fa-facebook-f"></x-button>

            <p class="register-here">
                Al een account? <strong><a href="#">Meld je aan</a></strong>
            </p>
        </div>
    </div>
@endsection
