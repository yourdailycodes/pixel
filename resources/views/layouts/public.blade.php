<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- GENERAL META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- PLUGINS -->
        <link rel="stylesheet" href="{{asset('/vendor/animate.css')}}">
        <link rel="stylesheet" href="{{asset('/vendor/owl/owl.carousel.min.css')}}">

        <!-- MAIN CUSTOM STYLES FILE -->
        <link rel="stylesheet" href="{{asset('/assets/public.css')}}">

        <!--  PAGE SPECIFIC TAGS -->
        @yield('head')

    </head>
    <body>
        
        @include('includes.public_header')
        
        @yield('body')

        @include('includes.public_footer')


        <script src="{{asset('/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('/vendor/owl/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/vendor/owl/owl.animate.js')}}"></script>
        <script src="{{asset('/assets/public.js')}}"></script>
        @yield('scripts')

    </body>
</html>
