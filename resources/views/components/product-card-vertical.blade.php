<div class="ProductCardVertical">
    <img src="{{ asset('images/'.$image) }}" alt="{{$alt ?? ''}}">
    <div class="information">
        <p class="title">{{$title}} <span class="year">{{$year}}</span></p>
        <p class="price">€ {{$price}}</p>

        @if(!$bidding)
            <p class="kilometers">{{$kilometers}} km - {{$year}}</p>
            <div class="location-star">
                <p class="location">{{$location}}</p>

                @if($favorite)
                    <img src="{{ asset('images/star-active.svg') }}" class="star-icon" alt="star icon"/>
                @else
                    <img src="{{ asset('images/star.svg') }}" class="star-icon" alt="active star icon"/>
                @endif
            </div>
        @else
            <p class="bid">{{$bid}}</p>
        @endif
    </div>
</div>