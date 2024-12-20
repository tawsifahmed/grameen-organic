<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('customCSS')
</head>
    <body >
     @include('layouts.header') 
     @yield('content')
     @include('layouts.footer')

    @yield('customJS')
    </body>
</html>

