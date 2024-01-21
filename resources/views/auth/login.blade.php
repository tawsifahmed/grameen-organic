@extends('layouts.authMaster')


<div class="login-wrapper container w-100 d-flex flex-column justify-content-center align-items-center">
    <div class="sign-in auth-w-lg d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logos/brand-logo-3.svg') }}" alt="">
        <p class="login-brief">This is a secure system and you will need to provide your login details to access the
            site.</p>
        <div class="login-lang d-flex align-items-start gap-4">
            <div>
                <div class="d-flex align-items-center gap-2 mb-1">
                    <p class="login-acc">Login Account</p>
                    <img src="{{ asset('assets/images/users/User.svg') }}" alt="">
                </div>

                <p class="login-welcome">Hello, welcome back to Grameen Organic!</p>
            </div>
            <div class="select-country">
                <select class="selectpicker" data-width="fit">
                    <option data-content='<span class="flag-icon flag-icon-bd"></span>'></option>
                    <option data-content='<span class="flag-icon flag-icon-us"></span>'></option>
                </select>
            </div>
        </div>
        <div class="login-inputs auth-w-lg  ">
            <figure class="tabBlock">
                <ul class="tabBlock-tabs d-flex justify-content-center">
                    <li class="tabBlock-tab is-active w-50 text-center email-tab">Email</li>
                    <li class="tabBlock-tab w-50 text-center ph-tab">Phone Number</li>
                </ul>
                <div class="tabBlock-content">
                    <div class="tabBlock-pane">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <form class="login-forms auth-w-lg  ">
                                <p>
                                    <label class="sr-only" for="">Email Address</label>
                                    <input class="form-control py-4" type="email" placeholder="Email Address" required
                                        autofocus>
                                </p>
                                <p>
                                    <label class="sr-only" for="">Password</label>
                                    <input class="form-control py-4" type="email" placeholder="Password" required>
                                </p>
                                <a href="" class="forgot-pass">Forgot Password?</a>
                                <button class="btn btn-primary btn-block"
                                    style="background-color: #00BD6A; border:none; padding: 16px 32px";
                                    type="sumbit">Login</button>
                            </form>
                            <div class="d-flex align-items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="105" height="2"
                                    viewBox="0 0 105 2" fill="none">
                                    <path d="M0 1H105" stroke="#A39797" stroke-width="0.6" />
                                </svg>
                                <p style="margin-bottom: 0px ">Or sign up with</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="105" height="2"
                                    viewBox="0 0 105 2" fill="none">
                                    <path d="M0 1H105" stroke="#A39797" stroke-width="0.6" />
                                </svg>
                            </div>
                            <div class="google-wrapper">
                                <button class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g clip-path="url(#clip0_3_30)">
                                            <path
                                                d="M21.4859 11.2058C21.4859 10.3045 21.4128 9.64674 21.2545 8.96466H10.9622V13.0328H17.0036C16.8818 14.0438 16.2241 15.5663 14.7624 16.5894L14.7419 16.7256L17.9962 19.2466L18.2216 19.2691C20.2922 17.3568 21.4859 14.5432 21.4859 11.2058Z"
                                                fill="#4285F4" />
                                            <path
                                                d="M10.9622 21.9244C13.922 21.9244 16.4067 20.95 18.2216 19.2692L14.7624 16.5894C13.8367 17.235 12.5943 17.6857 10.9622 17.6857C8.06333 17.6857 5.60295 15.7734 4.72588 13.1303L4.59733 13.1412L1.21353 15.76L1.16927 15.883C2.97193 19.464 6.67473 21.9244 10.9622 21.9244Z"
                                                fill="#34A853" />
                                            <path
                                                d="M4.72589 13.1303C4.49447 12.4482 4.36053 11.7174 4.36053 10.9622C4.36053 10.207 4.49447 9.47621 4.71371 8.79413L4.70758 8.64886L1.28137 5.98804L1.16927 6.04136C0.426313 7.52737 0 9.19609 0 10.9622C0 12.7283 0.426313 14.397 1.16927 15.883L4.72589 13.1303Z"
                                                fill="#FBBC05" />
                                            <path
                                                d="M10.9622 4.23869C13.0206 4.23869 14.4092 5.12785 15.2009 5.87089L18.2947 2.85018C16.3946 1.08405 13.922 0 10.9622 0C6.67473 0 2.97193 2.46039 1.16927 6.04135L4.71371 8.79412C5.60294 6.15102 8.06333 4.23869 10.9622 4.23869Z"
                                                fill="#EB4335" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3_30">
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>Google</p>
                                </button>
                            </div>
                            <div class="create-acc-wrapper">
                                <p>Not  registered yet? <span> <a href="">Create Account</a></span></p>
                            </div>

                        </div>
                    </div>
                    <div class="tabBlock-pane">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <form class="login-forms auth-w-lg" >
                                <p>
                                    <label class="sr-only" for="">Email Address</label>
                                    <input class="form-control py-4" type="number" placeholder="Enter Phone Number"
                                        required autofocus>
                                </p>

                                <button class="btn btn-primary btn-block"
                                    style="background-color: #00BD6A; border:none; padding: 16px 32px;"
                                    type="sumbit">Send OTP</button>
                            </form>
                            <div class="google-wrapper">
                                <button class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g clip-path="url(#clip0_3_30)">
                                            <path
                                                d="M21.4859 11.2058C21.4859 10.3045 21.4128 9.64674 21.2545 8.96466H10.9622V13.0328H17.0036C16.8818 14.0438 16.2241 15.5663 14.7624 16.5894L14.7419 16.7256L17.9962 19.2466L18.2216 19.2691C20.2922 17.3568 21.4859 14.5432 21.4859 11.2058Z"
                                                fill="#4285F4" />
                                            <path
                                                d="M10.9622 21.9244C13.922 21.9244 16.4067 20.95 18.2216 19.2692L14.7624 16.5894C13.8367 17.235 12.5943 17.6857 10.9622 17.6857C8.06333 17.6857 5.60295 15.7734 4.72588 13.1303L4.59733 13.1412L1.21353 15.76L1.16927 15.883C2.97193 19.464 6.67473 21.9244 10.9622 21.9244Z"
                                                fill="#34A853" />
                                            <path
                                                d="M4.72589 13.1303C4.49447 12.4482 4.36053 11.7174 4.36053 10.9622C4.36053 10.207 4.49447 9.47621 4.71371 8.79413L4.70758 8.64886L1.28137 5.98804L1.16927 6.04136C0.426313 7.52737 0 9.19609 0 10.9622C0 12.7283 0.426313 14.397 1.16927 15.883L4.72589 13.1303Z"
                                                fill="#FBBC05" />
                                            <path
                                                d="M10.9622 4.23869C13.0206 4.23869 14.4092 5.12785 15.2009 5.87089L18.2947 2.85018C16.3946 1.08405 13.922 0 10.9622 0C6.67473 0 2.97193 2.46039 1.16927 6.04135L4.71371 8.79412C5.60294 6.15102 8.06333 4.23869 10.9622 4.23869Z"
                                                fill="#EB4335" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3_30">
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>Google</p>
                                </button>
                            </div>
                            <div class="create-acc-wrapper">
                                <p>Not  registered yet? <span> <a href="{{route('create.account')}}">Create Account</a></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </figure>



        </div>
    </div>
</div>

