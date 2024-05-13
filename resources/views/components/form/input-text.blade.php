<label for="{{$id}}" {{ $attributes->class(["form-input", "input-text"])}}>

    <input 

     type="{{$type}}"
     name="{{$name}}"
     id="{{$id}}"

     @isset($min) min="{{$min}}" @endisset 
     @isset($max) max="{{$max}}" @endisset 

     @if(isset($step) && $type == "number") step="{{$step}}" @endif
     
     @isset($value) value="{{$value}}" @endisset 
     @isset($placeholder) placeholder="{{$placeholder}}" @endisset 
     @isset($pattern) pattern="{{$pattern}}" @endisset 

     @required($required)
     @disabled($disabled)
     >

</label>