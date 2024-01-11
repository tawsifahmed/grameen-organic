@extends('layouts.authMaster')

<div class="signup-wrapper container w-100 h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="w-100">
        <div class="lang-selector position-absolute" style="top: 10%; right: 10%;">
            <select name="format" id="format" class="selectpicker" data-width="fit">
                <option value="English">English(US) </option>
                <option value="Espaniol">Espaniol</option>
            </select>
        </div>
    </div>
    <div class="signup w-50 d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logos/brand-logo-3.svg') }}" alt="">
        <p class="login-brief fs-2 text-start">Sign up </p>

        <div class="signup-inputs w-75">
            <figure class="tabBlock">
                <ul class="tabBlock-tabs d-flex justify-content-center">
                    <li class="tabBlock-tab is-active w-50 text-center email-tab">Personal Info</li>
                    <li class="tabBlock-tab w-50 text-center ph-tab">Account Details</li>
                </ul>
                <div class="tabBlock-content">
                    <div class="tabBlock-pane">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <form class="signup-forms" style="width: 383px;">
                                <div class="signup-inputs mb-3">
                                    <label class="fs-6">Full Name</label>
                                    <input class="form-control py-4" type="text" placeholder="Full Name" required
                                        autofocus>
                                </div>
                                <div class="d-flex mb-3 flex-column signup-inputs gender-select-container">
                                    <label class="fs-6">Gender</label>
                                    <select name="format" id="format" class="gender-select" data-width="fit">
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                        <option value="2">Other</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column signup-inputs dob-select-container">
                                    <label class="fs-6">Date of Birth</label>
                                    <input type="date" class="form-control" id="exampleInputDOB1"
                                        placeholder="Date of Birth">
                                </div>
                                <div class="signup-inputs mb-3">
                                    <label class="fs-6">How did you here about us? <span
                                            class="text-danger fs-3">*</span> </label>
                                    <input class="form-control py-4" type="email"
                                        placeholder="Google, Referral, TV, or Other" required autofocus>
                                </div>
                                <a class="btn btn-primary btn-block text-white mt-3"
                                    style="background-color: #00BD6A; border:none; padding: 16px 32px;">CONTINUE
                                </a>

                            </form>
                        </div>
                    </div>
                    <div class="tabBlock-pane">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <form class="signup-forms" style="width: 383px;">
                                <div class="signup-inputs mb-3">
                                    <label class="fs-6">Email ID</label>
                                    <input class="form-control py-4" type="email" placeholder="Email Address" required
                                        autofocus>
                                </div>
                                <div class="signup-inputs mb-3 position-relative">
                                    <label class="fs-6">Create New Password</label>
                                    <input class="form-control py-4" type="password" placeholder="Create Password" required
                                        autofocus>
                                        <svg class="position-absolute top-50 end-0 mr-2 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="27" viewBox="0 0 33 27" fill="none">
                                            <path d="M15.4475 26.252C12.0898 26.2583 8.81134 25.224 6.05584 23.289C3.36707 21.4049 1.29071 18.7611 0.0878906 15.69C1.56271 11.9212 4.34353 8.82021 7.91394 6.96296L11.2286 10.08C10.4178 10.7001 9.7512 11.4916 9.27554 12.3989C8.79988 13.3062 8.52664 14.3074 8.47496 15.3324C8.42327 16.3574 8.59439 17.3814 8.97634 18.3327C9.35828 19.284 9.9418 20.1396 10.686 20.8395C11.4303 21.5395 12.3173 22.0669 13.2848 22.3848C14.2524 22.7027 15.2772 22.8034 16.2874 22.6799C17.2976 22.5563 18.2689 22.2116 19.1331 21.6697C19.9973 21.1278 20.7337 20.402 21.2905 19.543L25.087 23.113C23.719 24.113 22.2059 24.8939 20.6014 25.428C18.9378 25.9771 17.198 26.2553 15.4475 26.252ZM27.6432 20.807L22.4228 15.897C22.4228 15.829 22.4228 15.759 22.4228 15.69C22.4207 13.8232 21.6845 12.0335 20.3757 10.7136C19.067 9.39357 17.2925 8.65108 15.4415 8.64896C15.2105 8.64896 14.9775 8.66096 14.7475 8.68296L11.4903 5.61096C15.3743 4.65005 19.4719 5.1418 23.0238 6.99509C26.5757 8.84838 29.341 11.9375 30.8071 15.69C30.4377 16.6346 29.9837 17.5434 29.4507 18.405C28.922 19.2578 28.3184 20.061 27.6471 20.805L27.6432 20.807ZM15.4475 19.914C14.5287 19.9135 13.6355 19.6084 12.9055 19.0457C12.1755 18.4829 11.6492 17.6937 11.4077 16.7997C11.1661 15.9056 11.2227 14.9562 11.5688 14.0978C11.9148 13.2393 12.5311 12.5194 13.3227 12.049L19.1974 17.574C18.8497 18.2767 18.3148 18.8678 17.6526 19.2811C16.9904 19.6945 16.2262 19.9136 15.4475 19.914Z" fill="#D3DBF8"/>
                                            <path d="M8.11996 0.556724L5.67139 3.20496L30.1757 26.251L32.6242 23.6028L8.11996 0.556724Z" fill="#D3DBF8"/>
                                          </svg>
                                </div>
                                <div class="signup-inputs mb-3">
                                    <label class="fs-6">Phone Number</label>
                                    <input class="form-control py-4" type="number" placeholder="01710 XXX XXX" required
                                        autofocus>
                                </div>
                                <div class="signup-inputs mb-3">
                                    <label class="fs-6">NID Number</label>
                                    <input class="form-control py-4" type="number" placeholder="810 XXX XXX" required
                                        autofocus>
                                    <small >*NID For Citizens Of The Country Mainly   <br> 
                                   * Required Passport For Non Citizens</small>    
                                </div>
                            
                                <a href="{{route('verification')}}" class="btn btn-primary btn-block text-white mt-3"
                                    style="background-color: #00BD6A; border:none; padding: 16px 32px;">GET A CODE
                                </a>

                            </form>
                        </div>
                    </div>
                </div>
            </figure>



        </div>
    </div>
    <div class="create-acc-wrapper">
        <p>Already Have An Account? <span> <a href="{{route('login')}}">Sign In</a></span></p>
    </div>
</div>
