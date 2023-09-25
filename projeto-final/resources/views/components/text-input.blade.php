@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mb-4 text-center rounded-full h-10 w-4/5 outline-blue-500 p-3']) !!}>
