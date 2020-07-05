<button class="Button {{$class ?? ''}}">
    @if(isset($icon))
        <i class="{{$icon}}"></i>
    @endif
    {{$title ?? ''}}
</button>