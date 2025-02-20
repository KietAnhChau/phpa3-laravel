<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="p-4 space-y-4">
            <p class="text-blue-600">The quick brown fox...</p>
            <p class="bg-blue-500 text-white p-2 rounded">This should be a blue box</p>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                This should be a blue button
            </button>
        </div>
    </body>
</html>
