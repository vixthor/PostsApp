@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-light-brown border-2 focus:border-light-brown focus:ring-light-brown rounded-md shadow-sm']) !!}>
