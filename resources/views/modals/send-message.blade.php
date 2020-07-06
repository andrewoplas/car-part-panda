@extends('layouts.default', ['hideHeader'=>true,'hideFooter'=>true])

@section('content')
    <div class="Modal ModalSendMessage">

        <div class="content">
            <img src="{{ asset('images/close.svg') }}" class="close" alt="close"/>

            <h3 class="title left">Stuur een bericht</h3>

            <div class="item">
                <x-label class="space-bottom" title="JOUW BERICHT?"></x-label>
                <x-textarea class="block"></x-textarea>
            </div>

            <x-button title="Verstuur bericht" class="btn-register block large not-rounded glow"></x-button>
        </div>
    </div>
@endsection
