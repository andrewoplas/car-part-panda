@extends('layouts.default', ['hideHeader'=>true,'hideFooter'=>true])

@section('content')
    <div class="Modal ModalLogin">

        <div class="content">
            <img src="{{ asset('images/close.svg') }}" class="close" alt="close"/>

            <h3 class="title">Aanmelden</h3>

            <div class="item">
                <x-label class="space-bottom" title="E-MAIL ADRES"></x-label>
                <x-input class="block"></x-input>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="WACHTWOORD"></x-label>
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
                Nog geen account? <strong><a href="#">Registreer hier</a></strong>
            </p>
        </div>
    </div>
@endsection
