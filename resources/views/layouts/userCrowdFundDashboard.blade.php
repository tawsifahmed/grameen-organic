<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="crowd-investor-layout">
    <div class="container nav d-flex justify-content-between align-items-start" style="margin-bottom: 32px">
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
                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <path
                                d="M7.66634 14C11.1641 14 13.9997 11.1645 13.9997 7.66667C13.9997 4.16887 11.1641 1.33334 7.66634 1.33334C4.16854 1.33334 1.33301 4.16887 1.33301 7.66667C1.33301 11.1645 4.16854 14 7.66634 14Z"
                                stroke="#A49F9F" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.6663 14.6667L13.333 13.3333" stroke="#A49F9F" stroke-linecap="round"
                                stroke-linejoin="round" />
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
    <div class="container mx-auto my-0 com-layout">
        <div class="row sideb">
            <div class="col-md-3 col-12">
                <p>Hello, “Name”</p>
                <div class="sidebar">
                    <ul>
                        <li class="{{ Request::is('crowd-fund-investor-dashboard') ? 'active' : '' }}">
                            <a class="d-flex align-items-center gap-2"
                                href="{{ route('crowd.fund.investor') }}">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="#84828A">
                                    <path d="M13 9V3H21V9H13ZM3 13V3H11V13H3ZM13 21V11H21V21H13ZM3 21V15H11V21H3Z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li class="{{ Request::is('crowd-fund-investor-portfolio') ? 'active' : '' }}">
                            <a class="d-flex align gap-2"
                                href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21.75 12.75V21H2.25V12.75M1.5 6H22.5V12C22.5 12 18 15 12 15C6 15 1.5 12 1.5 12V6ZM12 16.5V13.5V16.5ZM15 6C15 6 15 3 12 3C9 3 9 6 9 6"
                                        fill="#84828A" />
                                    <path
                                        d="M21.75 12.75V21H2.25V12.75M12 16.5V13.5M15 6C15 6 15 3 12 3C9 3 9 6 9 6M1.5 6H22.5V12C22.5 12 18 15 12 15C6 15 1.5 12 1.5 12V6Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Portfolio
                            </a>
                        </li>
                        <li class="{{ Request::is('crowd-fund-investor-portfolio') ? 'active' : '' }}">
                            <a class="d-flex align gap-2"
                                href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3 19V5H21V19H3ZM4.8 8.5H19.2V6.75H4.8V8.5ZM15.3975 13.8156L19.2 10.7094V10.25H4.8V11.3219L15.3975 13.8156Z"
                                        fill="#84828A" />
                                </svg>
                                Blog Post
                            </a>
                        </li>
                        <li class="{{ Request::is('crowd-fund-investor-portfolio') ? 'active' : '' }}">
                            <a class="d-flex align gap-2"
                                href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M4 8H18.4M15.2 4L19.2 8L15.2 12M20 16H5.6M8.8 12L4.8 16L8.8 20"
                                        stroke="#84828A" stroke-width="2" />
                                </svg>
                                Reporting & Transaction
                            </a>
                        </li>
                        <li class="{{ Request::is('crowd-fund-investor-portfolio') ? 'active' : '' }}">
                            <a class="d-flex align gap-2"
                                href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_151_596)">
                                        <path
                                            d="M20.175 17.9038C20.1342 16.2481 19.572 14.6475 18.5685 13.3299C17.5651 12.0123 16.1715 11.0449 14.5862 10.5655C15.3623 10.1253 16.0099 9.48975 16.4646 8.72201C16.9194 7.95427 17.1655 7.08099 17.1786 6.18878C17.1189 4.75077 16.4915 3.39508 15.434 2.41884C14.3765 1.44259 12.975 0.92543 11.5369 0.9807C10.099 0.925712 8.69802 1.44286 7.64075 2.41885C6.58348 3.39483 5.95615 4.75009 5.89618 6.18772C5.91071 7.10547 6.17116 8.00253 6.65039 8.78536C7.12962 9.5682 7.81007 10.2081 8.6208 10.6385C7.08654 11.149 5.74738 12.1209 4.7864 13.4213C3.82543 14.7218 3.28952 16.2872 3.25195 17.9038"
                                            stroke="#84828A" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_151_596">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Edit Profile
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-12">
                @yield('content')
            </div>
        </div>
    </div>


    @yield('customJS')
</body>


<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>

{{-- total funded graph --}}
<script>
    const canvas = document.getElementById("line-chart");
    canvas.width = 78;
    canvas.height = 24;

    new Chart(canvas, {
        type: 'line',
        data: {
            labels: [1, 2, 3, 4, 5],
            datasets: [{
                data: [1, 5205, 1321, 1516, 2107],
                label: "America",
                borderColor: "#3cba9f",
                fill: false,
            }],
        },
        options: {
            responsive: false, // Disable automatic resizing
            maintainAspectRatio: false, // Disable maintaining aspect ratio
            title: {
                display: true,
                text: 'Chart JS Line Chart Example',
            },
            scales: {
                x: {
                    display: false, // Hide x-axis line and labels
                },
                y: {
                    display: false, // Hide y-axis line and labels
                },
            },
            plugins: {
                legend: {
                    display: false, // You may want to set this to false if you want to hide the legend as well
                },
            },
        },
    });
</script>

{{-- total earning --}}
<script>
    const canvas = document.getElementById("total-earning-chart");
    canvas.width = 78;
    canvas.height = 24;

    new Chart(canvas, {
        type: 'line',
        data: {
            labels: [1, 2, 3, 4, 5],
            datasets: [{
                data: [1, 5205, 1321, 1516, 2107],
                label: "America",
                borderColor: "white",
                fill: false,
            }],
        },
        options: {
            responsive: false, // Disable automatic resizing
            maintainAspectRatio: false, // Disable maintaining aspect ratio
            title: {
                display: true,
                text: 'Chart JS Line Chart Example',
            },
            scales: {
                x: {
                    display: false, // Hide x-axis line and labels
                },
                y: {
                    display: false, // Hide y-axis line and labels
                },
            },
            plugins: {
                legend: {
                    display: false, // You may want to set this to false if you want to hide the legend as well
                },
            },
        },
    });
</script>



</html>
