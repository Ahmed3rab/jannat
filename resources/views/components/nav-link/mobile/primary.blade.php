@props(['route', 'label'])
@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp

<a href="{{ LaravelLocalization::localizeUrl(route($route, [], false)) }}"
    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-sm transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
    <span class="relative">
        {{ __($label) }}
    </span>
</a>
