<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VIMEO</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div lass="container">
            @yield('content')
        </div>
           
        <script src="{{ 'js/app.js' }}"></script>
    </body>
</html>
