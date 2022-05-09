<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Multi Lang - {{ strtoupper(app()->getLocale()) }}</title>
    </head>
    <body>

        <h1>{{ __('common.welcome') }}</h1>
        
        @include('components.language-switcher')
    </body>
</html>
