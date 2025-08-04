@props(['message'])
@error($message)
    <p {{$attributes->merge(['class' => 'text-red-500 text-xs'])}}>{{$message}}</p>
@enderror
