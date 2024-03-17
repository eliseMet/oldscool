<div {{ $attributes->class(["form-group"])}}>
    {{-- Allways form-label class, add form-required class's if has required is true, add form-error class's if error is not null --}}
    <label for={{$id}} @class(["form-label", "form-required" => $required, "form-error" => $error])>
        {{$label}}
    </label>
    <div class="form-content">
        @isset($leftContent) {{$leftContent}} @endisset
        {{$slot}}
        @isset($rigthContent) {{$rigthContent}} @endisset
    </div>
    
    @isset($error)
        <p class="form-error-content">{{$error}}</p>
    @endisset
    
</div>