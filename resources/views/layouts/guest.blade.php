<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style type="text/css">
            .min-h-screen {
                background-color: #1D2026;
            }
        </style>


    </head>
    <body>
        <nav class="navbar navbar-light bg-light" style="background-color: #f30606; padding: 0 15px; height: 80px; line-height: 80px;">
            <a  href="/" style= "color: white;
            padding: 2px 25px;
            text-align: center;
            text-decoration: none;">
              Fast Post
            </a>
        </nav>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
