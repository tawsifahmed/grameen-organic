<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="my-profile-layout">
    @include('layouts.header') 
    <div class="container mx-auto mb-0 mt-4 com-layout">
        <div class="row sideb">
            <div class="col col-12">
                @yield('content')
            </div>
        </div>
    </div>


    @yield('customJS')
</body>


</html>
