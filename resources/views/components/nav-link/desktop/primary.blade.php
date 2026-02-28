@props(['route', 'label'])
@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp

<a href="{{ LaravelLocalization::localizeUrl(route($route, [], false)) }}"
    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:scale-x-0 group-hover:after:scale-x-100 after:transform after:transition after:h-[0.5px] after:bg-white after:content-['']">
    <span class="relative">
        {{ __($label) }}
    </span>
</a>
