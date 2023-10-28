<div {{ $attributes->merge(['class' => 'card']) }}>
    @if (isset($head))
        <div class="card-head">
            {{$head}}   
        </div>        
    @endif
    @if (isset($main))
        <div class="card-main">
            {{$main}}
        </div>        
    @endif
    @if (isset($content))
        <div class="card-content">
            {{$content}}
        </div>        
    @endif
    @if (isset($footer))
        <div class="card-footer">
            {{$footer}}
        </div>        
    @endif
</div>