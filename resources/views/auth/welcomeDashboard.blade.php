@extends('layouts.authMaster')

<div class="welcome-wrapper container w-100">
    <div class="create-acc d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logos/brand-logo-3.svg') }}" alt="">
        <p class="create-brief fs-2 fw-bold mt-3"><span>Name! </span>  Thanks for joining
            Grameen Organic</p>
        <div class=" mt-3">
            <p class="fs-5 fw-normal text-center mb-0 ">You have thus come this far! <br>
                Choose your preferred investment <br>
                category and let us handle the rest for you. </p>
        </div>
        <div class="welcome-btn-wrapper py-3 rounded-lg">
            <button>
                <a class="text-white cursor-pointer" href="{{ route('home') }}">Assalamu Alaikum!</a>
            </button>
        </div>
    </div>
</div>
