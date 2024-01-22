<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="container nav d-flex justify-content-between align-items-start px-4 px-md-0">
        <div class="left-part">
            <a href="{{route('home')}}" class="brand-logo-wrapper cursor-pointer d-lg-block d-none">
                <img class="img-fluid" width="274" height="126px" src="{{ asset('assets/images/logos/brand-logo-1.png') }}" alt="">
            </a>
            <a href="{{route('home')}}" class="d-lg-none brand-logo-wrapper cursor-pointer d-lg-none">
                <img class="mt-2" style="width: 84px; height: 38px;" src="{{ asset('assets/images/logos/brand-logo-1.png') }}" alt="">
            </a>
        </div>
        <div class="mid-n-right-part d-flex align-items-center justify-content-between">
            <div class="right-part d-flex justify-content-between align-items-center gap-3">
                <div class="notification-icon-wrapper">
                    <img src="{{ asset('assets/images/icons/notification.svg') }}" alt="">
                </div>
                <div class="user-logo-wrapper">
                    <img src="{{ asset('assets/images/users/demo-user.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    
  <div>
    @yield('content')
  </div>

    @yield('customJS')
</body>

</html>