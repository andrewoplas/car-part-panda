<div class="Breadcrumbs">
    @foreach($links as $link)
        <a href="{{$link['href'] ?? 'javascript:void(0)'}}"
           class="item {{($link['is_current'] ?? null) ? 'current' : ''}}"
        >
            {{$link['name']}}
        </a>

        @if(!$loop->last)
            <span class="divider">></span>
        @endif
    @endforeach

</div>