<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body class="elJefe">
        <div id="app-container">
          @yield('bible')
        </div>
        {{-- @include('includes.footer') --}}
        @include('includes.awesomeSauce')
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>
