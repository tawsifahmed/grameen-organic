<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="my-profile-layout">
    <div class="container nav d-flex gap-5 align-items-end" style="margin-bottom: 32px">
        <div class="left-part">
            <a href="{{ route('home') }}" class="brand-logo-wrapper cursor-pointer">
                <img class="img-fluid" width="274" height="126px"
                    src="{{ asset('assets/images/logos/brand-logo-1.png') }}" alt="">
            </a>
        </div>
        <div>
            <div>
                <h2>My Account</h2>
            </div>

           
        </div>
    </div>
    <div class="container mx-auto my-0 com-layout">
        <div class="row sideb">
            <div class="col-12">
                <div class="sidebar">
                    <ul class="d-flex align-items-center justify-content-evenly w-100">
                        <li class="{{ Request::is('account/personal-information') ? 'active' : '' }}">
                            <a class=""
                                href="{{ route('account.personal') }}">
                                Personal Information
                            </a>
                        </li>
                        <li class="{{ Request::is('account/bank-information') ? 'active' : '' }}">
                            <a class=""
                                href="{{route('account.bankInfo')}} ">
                                
                                Bank Information
                            </a>
                        </li>
                        <li class="{{ Request::is('account/nominee-information') ? 'active' : '' }}">
                            <a class=""
                                href="{{route('account.nomineeInfo')}} ">
                                
                                Nominee Information
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col col-12">
                @yield('content')
            </div>
        </div>
    </div>


    @yield('customJS')
</body>


</html>
