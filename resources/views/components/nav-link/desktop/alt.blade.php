@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
    use Illuminate\Support\Str;
    $currentRoute = request()->route()?->getName();
    $routeGroup = Str::contains($route, '.') ? Str::before($route, '.') : $route;
    $isActive = Str::startsWith($currentRoute, $routeGroup);
@endphp
@props([
    'route',
    'label',
    'params' => [],
    'activeClass' => 'after:scale-x-100',
    'inactiveClass' => 'after:scale-x-0 group-hover:after:scale-x-100',
])

<a href="{{ LaravelLocalization::localizeUrl(route($route, [], false)) }}"
    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:transform after:transition after:h-[0.5px] after:bg-primary after:content-[''] {{ $isActive ? $activeClass : $inactiveClass }}">
    <span class="relative">
        {{ __($label) }}
    </span>
</a>
