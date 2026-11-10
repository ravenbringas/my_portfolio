<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#05070D">
        <meta name="description" content="Portfolio of Raven Bringas — IT student and aspiring web developer passionate about technology and modern digital experiences.">

        <title>Raven Bringas | IT Student &amp; Aspiring Web Developer</title>

        @fonts

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <noscript>
            <style>
                .reveal { opacity: 1; }
            </style>
        </noscript>
    </head>
    <body>
        <div class="ambient" aria-hidden="true"></div>

        <x-navbar />

        <main>
            @yield('content')
        </main>

        <x-footer />
    </body>
</html>
