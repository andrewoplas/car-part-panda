<div class="RadioButton {{$class}}">
    <input type="radio" name="{{$name}}" id="{{$id}}" value="{{$value}}" {{$checked ? 'checked' : ''}}/>
    <label for="{{$id}}">
        {{$title}}
    </label>
</div>