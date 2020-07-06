<div class="Header">

    {{--  Left Side of Header  --}}
    <div class="left">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/logo-white.png') }}" alt="white logo"/>
            </a>

        </div>
        <div class="links">
            <a class="active" href="javascript:void(0)">Auto’s</a>
            <a href="javascript:void(0)">Onderdelen</a>
            <a href="javascript:void(0)">Velgen</a>
            <a href="javascript:void(0)">Banden</a>
            <a href="javascript:void(0)">Accessoires</a>
            <a href="javascript:void(0)">Nieuws</a>
        </div>
    </div>

    {{--  Right Side of Header  --}}
    <div class="right">
        <div class="icon magnifying-glass">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18C11.131 18 13.089 17.251 14.633 16.008L22.291 23.705C22.68 24.097 23.312 24.098 23.705 23.708C24.097 23.318 24.098 22.685 23.709 22.294L16.041 14.588C17.264 13.052 18 11.111 18 9C18 4.037 13.963 0 9 0C4.037 0 0 4.037 0 9C0 13.962 4.037 18 9 18ZM9 2C12.859 2 16 5.14 16 9C16 12.859 12.859 16 9 16C5.14 16 2 12.859 2 9C2 5.14 5.14 2 9 2Z"
                      fill="white"/>
            </svg>
        </div>

        <div class="icon speech-bubble">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M11.997 0.903015C5.38001 0.903015 -0.00299072 5.33702 -0.00299072 10.786C-0.00299072 13.359 1.17401 15.771 3.32201 17.617L0.912009 22.428C0.699009 22.852 1.14801 23.305 1.57001 23.105L8.00701 20.11C9.28501 20.48 10.626 20.668 11.997 20.668C18.614 20.668 23.997 16.235 23.997 10.786C23.997 5.33702 18.613 0.903015 11.997 0.903015ZM7.50001 8.00002H14C14.276 8.00002 14.5 8.22402 14.5 8.50002C14.5 8.77602 14.276 9.00002 14 9.00002H7.50001C7.22401 9.00002 7.00001 8.77602 7.00001 8.50002C7.00001 8.22402 7.22401 8.00002 7.50001 8.00002ZM17 15H7.50001C7.22401 15 7.00001 14.776 7.00001 14.5C7.00001 14.224 7.22401 14 7.50001 14H17C17.276 14 17.5 14.224 17.5 14.5C17.5 14.776 17.276 15 17 15ZM17 12H7.50001C7.22401 12 7.00001 11.776 7.00001 11.5C7.00001 11.224 7.22401 11 7.50001 11H17C17.276 11 17.5 11.224 17.5 11.5C17.5 11.776 17.276 12 17 12Z"
                          fill="white"/>
                </g>
            </svg>
        </div>

        <x-button title="Registreer semi" class="btn-register"></x-button>

        <a href="javascript:void(0)" class="sign-up-text">Aanmelden</a>

        <div class="account">
            <img src="{{ asset('images/avatar.png') }}" class="avatar" alt="user avatar"/>

            <div class="caret-icon">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 10.6719L16.5867 9.25861L12 13.8453L7.41333 9.25861L6 10.6719L12 16.6719L18 10.6719Z"
                          fill="white"/>
                </svg>
            </div>
        </div>
    </div>

</div>