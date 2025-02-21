<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Php a3</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        @include("header")
        @include("nav")
        <div id="content" class="bg-gray-300">
            @yield("content")
        </div>
        @include("footer")
    </body>
</html>
