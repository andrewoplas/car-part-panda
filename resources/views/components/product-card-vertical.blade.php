<div class="ProductCardVertical">
    <img src="{{ asset('images/'.$image) }}" alt="{{$alt ?? ''}}">
    <div class="information">
        <p class="title">{{$title}} <span class="year">{{$year}}</span></p>
        <p class="price">€ {{$price}}</p>
        <p class="kilometers">{{$kilometers}} km - {{$year}}</p>
        <div class="location-star">
            <p class="location">{{$location}}</p>
            <i class="far fa-star star-icon"></i>
        </div>
    </div>
</div>