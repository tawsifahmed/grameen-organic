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
            <div class="col-12">
                <div class="sidebar">
                    <ul class="d-flex align-items-center justify-content-evenly w-100 gap-2 gap-md-0">
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
