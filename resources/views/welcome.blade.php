<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @viteReactRefresh
        @vite('resources/react/src/pdfme.tsx')
    </head>
    <body>
        <!-- <div id="root"></div> -->
        <div id="container"></div>
    </body>
</html>