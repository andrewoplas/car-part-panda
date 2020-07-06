@extends('layouts.default', ['body' => 'white'])

@section('content')
    <div class="CreateLayout">
        <div class="wrapper">
            <x-back :link="$backPageLink ?? 'javascript:void(0)'" :title="$backPageName ?? 'Back'"></x-back>

            <div class="main-content">
                @yield('create-content')
            </div>
        </div>
    </div>
@endsection