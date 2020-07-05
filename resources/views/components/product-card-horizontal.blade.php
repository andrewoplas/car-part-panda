<div class="ProductCardHorizontal {{$class ?? ''}}">
    <img src="{{ asset('images/'.$image) }}" alt="{{$alt ?? ''}}">
    <div class="information">
        <p class="title">{{$title}}</p>
        <p class="price">€ {{$price}}</p>
        <p class="kilometers">{{$kilometers}} km - {{$year}}</p>
        <p class="location">{{$location}}</p>
    </div>
</div>