<div class="dropdown">
    <input type="checkbox" name="" id="{{$id}}-dropdown" class="dropdown-checkbox">
    <label for="{{$id}}-dropdown">
        {{-- <x-slot:label>Contenu du label</x-slot:label> --}}
        {{$label}}
    </label>
    <div class="dropdown-content">
        {{-- <x-slot:content>Contenu du dropdown</x-slot:content> --}}
        {{$content}}
    </div>
    <label class="dropdown-bg" for="{{$id}}-dropdown"></label>
</div>