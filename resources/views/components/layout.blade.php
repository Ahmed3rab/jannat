<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="min-h-screen">
    {{ $header }}
    <main class="mt-32">
        {{ $main }}
    </main>
    {{ $slot }}
    <footer class="mt-32 max-w-[1440px] mx-auto bg-primary rounded-t"
        style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">
        <div class="py-8 grid items-center justify-items-center text-white font-semibold">
            © 2024 شركة محمد الجهاني للعقارات. جميع الحقوق محفوظة.
        </div>
    </footer>
</body>

</html>
