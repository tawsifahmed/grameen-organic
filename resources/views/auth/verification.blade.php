@extends('layouts.authMaster')

<div class="verification-wrapper container w-100">
    <div class="create-acc d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logos/brand-logo-3.svg') }}" alt="">
        <p class="create-brief fs-2 fw-bold mt-3">Verification</p>
        <div class=" mt-3">
            <p class="fs-5 fw-normal text-center mb-0">Enter OTP That </p>
            <p class="fs-5 fw-normal text-center mb-0"> Was Sent To + (88) 01710000000 </p>
        </div>
        <div class="otp-input-box mt-5 shadow px-5 pt-5 py-2 rounded-lg">
            <form action="#">
                <div class="input-field d-flex">
                  <input type="number">
                  <input type="number" />
                  <input type="number" />
                  <input type="number" />
                 
                </div>
                <button>
                    <a class="text-white cursor-pointer" href="{{route('welcome.dashboard')}}">Verify OTP</a>
                </button>
              </form>
          </div>

       
        <p class="login-text mt-4 text-primary">Re-Send Code In 0:59 </p>

    </div>
</div>
