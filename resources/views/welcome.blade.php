<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Multi Lang</title>
    </head>
    <body>
        {{__('common.welcome')}}
        <br>
        <a href="{{route('welcome', [], true, 'en')}}">EN</a>
        <a href="{{route('welcome', [], true, 'es')}}">ES</a>
    </body>
</html>
