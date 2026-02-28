@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
    $isActive = request()->routeIs($route);
@endphp
@props([
    'route',
    'label',
    'params' => [],
    'activeClass' => 'after:scale-x-100',
    'inactiveClass' => 'after:scale-x-0 group-hover:after:scale-x-100',
])

<a href="{{ LaravelLocalization::localizeUrl(route($route, $params, false)) }}"
    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:transform after:transition after:h-[0.5px] after:bg-white after:content-[''] {{ $isActive ? $activeClass : $inactiveClass }}">
    <span class="relative">
        {{ __($label) }}
    </span>
</a>
