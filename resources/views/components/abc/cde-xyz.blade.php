@props([
    'color' => null,
    
])
<span class="text-{{ $color ?? 'white' }}"> 
    {{$slot}}
</span>