@props(['class' => null])

@php
    $finalClass = $class ?? 'link'
@endphp

<a {{$attributes->merge(['class' => $finalClass])}} >{{$slot}}</a>
