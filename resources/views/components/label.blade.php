@if(!$value)
    <span class="Label {{$class ?? ''}}">{{$title}}</span>
@else
    <div class="label-value {{$class ?? ''}}">
        <span class="Label">{{$title}}</span>
        <span class="value">{{$value}}</span>
    </div>
@endif