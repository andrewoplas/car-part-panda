<div class="ProductCardHorizontal {{$class ?? ''}}">
    <img src="{{ asset('images/'.$image) }}" class="thumbnail" alt="{{$alt ?? ''}}">
    <div class="information">
        <p class="title">{{$title}}</p>
        <p class="price">€ {{$price}}</p>
        <p class="kilometers">{{$kilometers}} km - {{$year}}</p>

        @if(!$bidding)
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