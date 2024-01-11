<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="crowd-investor-layout container nav d-flex justify-content-between align-items-start">
        <div class="left-part">
            <a href="{{ route('home') }}" class="brand-logo-wrapper cursor-pointer">
                <img class="img-fluid" width="274" height="126px"
                    src="{{ asset('assets/images/logos/brand-logo-1.png') }}" alt="">
            </a>
        </div>
        <div class="mid-n-right-part d-flex align-items-center justify-content-between">
            <div class="search-bar-wrapper">
                <div id="searchUsers" class="instant-search">
                    <div class="instant-search__input-container">
                      <input class="instant-search__input" type="text" placeholder="Search for stocks and more ">
                      <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14C11.1641 14 13.9997 11.1645 13.9997 7.66667C13.9997 4.16887 11.1641 1.33334 7.66634 1.33334C4.16854 1.33334 1.33301 4.16887 1.33301 7.66667C1.33301 11.1645 4.16854 14 7.66634 14Z" stroke="#A49F9F" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.6663 14.6667L13.333 13.3333" stroke="#A49F9F" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                  </div>
            </div>
          
            <div class="right-part d-flex justify-content-between align-items-center">
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
