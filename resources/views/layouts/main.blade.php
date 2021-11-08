<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> {{$titulo ?? 'Home'}} </title>
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="{{asset('') }}">
        @yield('styles')

    </head>
    <body>

        
w
        @yield('content')

       
    </body>
</html>
