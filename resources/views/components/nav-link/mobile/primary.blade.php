@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
    $isActive = request()->routeIs($route);
@endphp
@props([
    'route',
    'label',
    'params' => [],
    'activeClass' => 'bg-gray-100 font-semibold',
    'inactiveClass' => 'hover:bg-gray-50 focus-visible:bg-gray-50 ',
])

<a href="{{ LaravelLocalization::localizeUrl(route($route, [], false)) }}"
    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-sm transition-colors text-left text-gray-800 {{ $isActive ? $activeClass : $inactiveClass }}">
    <span class="relative">
        {{ __($label) }}
    </span>
</a>
