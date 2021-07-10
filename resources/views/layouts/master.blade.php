<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('assets/app.css') }}" rel="stylesheet" type="text/css">
        <title>Tasks</title>
    </head>
    <body>
        <header><h1>Comments</h1></header>
        
        @include('partials.errors')
        @include('partials.add-form')

        <p>@yield('blockTitle')</p>
        @yield('content')

    </body>
</html>