<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('head')

    </head>
    <body>
        
        @include('includes.public_header')
        
        @yield('body')

        @include('includes.public_footer')

        @yield('scripts')

    </body>
</html>
