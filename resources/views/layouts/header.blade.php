<div class="container nav d-flex flex-nowrap justify-content-between align-items-start ps-2 ps-sm-0">
    <div class="left-part">
        <div class="lang-selector">
            <select name="format" id="format" class="fs-6">
                <option value="English">English(US) </option>
                <option value="Espaniol">Espaniol</option>
            </select>
        </div>
        <a href="{{route('home')}}" class="brand-logo-wrapper cursor-pointer d-lg-block d-none">
            <img class="img-fluid" width="274" height="126px" src="{{ asset('assets/images/logos/brand-logo-1.png') }}" alt="">
        </a>
        <div class="d-lg-none d-flex align-items-center gap-1">
            <a href="{{route('home')}}" class="brand-logo-wrapper cursor-pointer d-lg-none">
                <img class="mt-2" style="width: 84px; height: 38px;" src="{{ asset('assets/images/logos/brand-logo-1.png') }}" alt="">
            </a>

            {{-- mbl menu dropdown icon--}}
            <div class="dropdown">
                <svg class=" dropdown-toggle mt-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"  xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 0C0.447715 0 0 0.447715 0 1C0 1.55228 0.447715 2 1 2H19C19.5523 2 20 1.55228 20 1C20 0.447715 19.5523 0 19 0H1ZM0 7C0 6.44772 0.447715 6 1 6H14C14.5523 6 15 6.44772 15 7C15 7.55228 14.5523 8 14 8H1C0.447715 8 0 7.55228 0 7ZM0 13C0 12.4477 0.447715 12 1 12H17C17.5523 12 18 12.4477 18 13C18 13.5523 17.5523 14 17 14H1C0.447715 14 0 13.5523 0 13Z" fill="#00BD6A"/>
                </svg>
             
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Fund Farmers</a></li>
                  <li><a class="dropdown-item" href="#">Our Solutions</a></li>
                  <li><a class="dropdown-item" href="#">Our Impact</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">My account</a></li>
                </ul>
              </div>
        </div>
    </div>
    <div class="mid-n-right-part gap-5 d-flex align-items-center justify-content-between">
        <div class="mid-part d-lg-block d-none">
            <a class="me-3 fs-5" href="{{ route('fund.farmer') }}">Fund Farmer</a>
            <a class="me-3 fs-5" href="{{ route('our.impact') }}">Our Solutions</a>
            <a class="fs-5" href="{{ route('our.impact') }}">Our Impact</a>
        </div>
        <div class="right-part d-flex flex-md-nowrap flex-wrap gap-xl-4 gap-md-3 gap-0 justify-content-end align-items-center ">
            <div class="d-flex align-items-center gap-3 justify-content-between">
                <div class="notification-icon-wrapper">
                    <img src="{{ asset('assets/images/icons/notification.svg') }}" alt="">
                </div>
                <div class="user-logo-wrapper">
                    <img src="{{ asset('assets/images/users/demo-user.svg') }}" alt="">
                </div>
            </div>
            <div class="login-signup">
                <a href="{{ route('login') }}" class="login-btn d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M18.3077 18.9038C18.2669 17.2481 17.7047 15.6475 16.7012 14.3299C15.6978 13.0123 14.3042 12.0449 12.7189 11.5655C13.495 11.1253 14.1426 10.4897 14.5973 9.72201C15.0521 8.95427 15.2982 8.08099 15.3113 7.18878C15.2516 5.75077 14.6242 4.39508 13.5667 3.41884C12.5092 2.44259 11.1077 1.92543 9.66955 1.9807C8.23172 1.92571 6.83071 2.44286 5.77344 3.41885C4.71617 4.39483 4.08884 5.75009 4.02887 7.18772C4.0434 8.10547 4.30386 9.00253 4.78308 9.78536C5.26231 10.5682 5.94276 11.2081 6.75349 11.6385C5.21923 12.149 3.88007 13.1209 2.9191 14.4213C1.95812 15.7218 1.42221 17.2872 1.38464 18.9038"
                            stroke="#F5F5F5" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="text-white">Sign In</p>
                </a>
                <a href="{{ route('create.account') }}" class="signup-btn d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M18.1756 18.9038C18.1348 17.2481 17.5726 15.6475 16.5691 14.3299C15.5657 13.0123 14.1721 12.0449 12.5868 11.5655C13.3629 11.1253 14.0105 10.4897 14.4652 9.72201C14.92 8.95427 15.1661 8.08099 15.1792 7.18878C15.1195 5.75077 14.4922 4.39508 13.4346 3.41884C12.3771 2.44259 10.9757 1.92543 9.53747 1.9807C8.09964 1.92571 6.69863 2.44286 5.64136 3.41885C4.58409 4.39483 3.95676 5.75009 3.89679 7.18772C3.91132 8.10547 4.17178 9.00253 4.651 9.78536C5.13023 10.5682 5.81068 11.2081 6.62141 11.6385C5.08715 12.149 3.74799 13.1209 2.78701 14.4213C1.82604 15.7218 1.29013 17.2872 1.25256 18.9038"
                            stroke="#00BD6A" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="text-white">Sign Up</p>


                </a>
            </div>
        </div>
    </div>
</div>
