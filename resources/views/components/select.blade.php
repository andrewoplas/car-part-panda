<select class="Select {{$class ?? ''}}">
    <option selected disabled>{{$placeholder}}</option>
    @foreach($options as $value    =>$label)
        <option value="{{$value}}">{{$label}}</option>
    @endforeach
</select>