@extends('layouts.default', ['hideHeader'=>true,'hideFooter'=>true])

@section('content')
    <div class="Modal ModalPricing">

        <div class="content">
            <img src="{{ asset('images/close.svg') }}" class="close" alt="close"/>

            <h3 class="title left">Wijzig prijs</h3>

            <div class="item">
                <x-label class="space-bottom" title="HOE WIL JE VERKOPEN?"></x-label>
                <x-select
                        class="block"
                        placeholder="Vaste prijs"
                        :options="['value1' => 'Option 1','value2' => 'Option 2','value3' => 'Option 3']"
                ></x-select>
            </div>
            <div class="item">
                <x-label class="space-bottom" title="PRIJS"></x-label>
                <x-input class="block" placeholder="Gratis"></x-input>
            </div>

            <x-button title="Bewaren" class="btn-register block large not-rounded glow"></x-button>
        </div>
    </div>
@endsection
