@extends('layouts.default', ['hideFooter' => true])

@section('content')
    <div class="Chat">
        <div class="chat-list">
            <div class="item active">
                <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="avatar"/>
                <div>
                    <div class="details">
                        <p class="name">Seppe Boudringhien</p>
                        <p class="recent-message">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>
                    </div>
                    <span class="time">21:45</span>
                </div>
            </div>

            <div class="item new">
                <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="avatar"/>
                <div>
                    <div class="details">
                        <p class="name">Seppe Boudringhien</p>
                        <p class="recent-message">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>
                    </div>
                    <span class="time">21:45</span>
                </div>
            </div>

            @for($i=0; $i<3; $i++)
                <div class="item">
                    <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="avatar"/>
                    <div>
                        <div class="details">
                            <p class="name">Seppe Boudringhien</p>
                            <p class="recent-message">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>
                        </div>
                        <span class="time">21:45</span>
                    </div>
                </div>
            @endfor
        </div>

        <div class="conversation">
            <div class="header">
                <div class="details">
                    <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="avatar"/>
                    <p class="name">Seppe Boudringhien</p>
                </div>

                <i class="far fa-chevron-down icon"></i>
            </div>

            <div class="chat-area">
                <div class="chat-messages">
                    <div class="item user">
                        <span class="date">12 AUGUSTUS 2019</span>

                        <div class="message">
                            <img src="{{ asset('images/avatar.png') }}" class="Avatar" alt="avatar"/>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                facilisis turpis ut pharetra iaculis. Vestibulum molestie dui eu luctus vestibulum.
                                <span class="time">10:15PM</span>
                            </p>
                        </div>
                    </div>

                    <div class="item you">
                        <span class="date">12 AUGUSTUS 2019</span>

                        <div class="message">
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                facilisis turpis ut pharetra iaculis. Vestibulum molestie dui eu luctus vestibulum.
                                <span class="time">10:15PM</span>
                            </p>
                        </div>
                        <div class="message">
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                facilisis turpis ut pharetra iaculis. Vestibulum molestie dui eu luctus vestibulum.
                                <span class="time">10:15PM</span>
                            </p>
                        </div>

                        <div class="message">
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                facilisis turpis ut pharetra iaculis. Vestibulum molestie dui eu luctus vestibulum.
                                <span class="time">10:15PM</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="chat-input">
                    <input type="text"/>
                    <x-button class="hide-on-mobile" title="Verstuur"></x-button>
                    <x-button class="icon hide-up-sm" title="" icon="fa fa-send"></x-button>
                </div>
            </div>
        </div>
    </div>
@endsection
