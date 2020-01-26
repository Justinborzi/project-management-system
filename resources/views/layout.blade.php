<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Management Solution</title>
        <link rel="stylesheet" href="{{asset("assets/css/global.css")}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="assets/css/index.css">-->
    </head>
    <body>
        <header>
            <ul class="links">
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/projects">Projects</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/blog">Blog</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/users">Users</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/admin">Admin</a></li>
            </ul>
        </header>
        @yield('content')
    </body>
</html>