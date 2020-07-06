@extends('layouts.default', ['hideHeader'=>true,'hideFooter'=>true])

@section('content')
    <div class="Modal ModalConfirmation">

        <div class="content">
            <img src="{{ asset('images/close.svg') }}" class="close" alt="close"/>
            <h3 class="title">Sed pulvinar tincidunt sagittis?</h3>
            <p class="information">+10 000 members design, prototype, and collaborate all in the browser—with Figma.</p>

            <div class="button-controls">
                <x-button title="Bevestigen" class="block large not-rounded red item"></x-button>
                <x-button title="Annuleren" class="block large not-rounded outline dark-gray item"></x-button>
            </div>
        </div>
    </div>
@endsection
