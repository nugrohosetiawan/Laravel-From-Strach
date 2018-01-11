<!DOCTYPE html>
<html>
    <head>
        <title>{{config('app.name','LSAPP')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @yield('content')
    </body>
</html>
