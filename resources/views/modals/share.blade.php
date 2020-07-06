@extends('layouts.default', ['hideHeader'=>true,'hideFooter'=>true])

@section('content')
    <div class="Modal ModalShare">

        <div class="content">
            <img src="{{ asset('images/close.svg') }}" class="close" alt="close"/>
            <h3 class="title">Deel dit zoekertje met je vrienden?</h3>

            <div class="share-buttons">
                <div class="item facebook">
                    <img src="{{ asset('images/facebook.svg') }}" alt="facebook-icon"/>
                </div>

                <div class="item whatsapp">
                    <img src="{{ asset('images/whatsapp.svg') }}" alt="whatsapp-icon"/>
                </div>

                <div class="item message">
                    <img src="{{ asset('images/imessage.svg') }}" alt="message-icon"/>
                </div>

                <div class="item email">
                    <img src="{{ asset('images/email.svg') }}" alt="email-icon"/>
                </div>
            </div>

            <div class="share-input">
                <x-input class="block" value="https://carpartpanda.com/ads/2ia1djedoz210"></x-input>
                <img src="{{ asset('images/copy.svg') }}" class="icon"/>
            </div>
        </div>
    </div>
@endsection
