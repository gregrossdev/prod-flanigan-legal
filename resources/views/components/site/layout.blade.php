<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased">
<div class="site-wrapper">
    <div class="site-container">
        <div class="app-container">
            <div class="drop-shadow">
                <x-site.nav />
                {{ $slot  }}
                <x-site.footer />
            </div>
        </div>
    </div>
</div>
</body>
</html>
