@extends('layouts.authMaster')

<div class="createacc-wrapper container w-100 h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="w-100">
        <div class="lang-selector position-absolute" style="top: 10%; right: 10%;">
            <select name="format" id="format" class="selectpicker" data-width="fit">
                <option value="English">English(US) </option>
                <option value="Espaniol">Espaniol</option>
            </select>
        </div>
    </div>
    <div class="create-acc d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logos/brand-logo-3.svg') }}" alt="">
        <p class="create-brief">Looking To Invest? <br> You Are In The Right Place.</p>
        <div class=" mt-5">
            <p class="fs-5 fw-bolder text-center mb-0">Join us to start Organic Agri Investment! </p>
            <p class="fs-5 fw-normal text-center mb-0">Discover your perfect Investment. </p>
        </div>
        <div class="styled-checkbox mt-5">
            <input type="checkbox" id="my-checkbox" />
            <label for="my-checkbox">I agree with the Terms Condition & Privacy Policy</label>
        </div>

        <div class="create-login-btns-wrapper d-flex justify-content-center align-items-center flex-column gap-4 mt-3">
            <a href="{{ route('signup') }}" class="btn btn-success create-btn ">
                Create Account
            </a>
            <a href="{{ route('login') }}" class="btn btn-success login-btn">
                Login
            </a>
        </div>
        <p class="login-text mt-4">Already have an account? <span><a href="">Login Now</a></span></p>

        <a class="privacy-route mt-3" href="">Privacy | Terms & Condition</a>
    </div>
</div>
