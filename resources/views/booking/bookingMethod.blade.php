@extends('layouts.booking')
@section('content')

<div class="booking-wrapper">
    <div class="position-relative">
        <img class="img-fluid position-absolute top-0 end-0" src="{{asset('assets/images/banners/booking-bg.svg')}}" alt="">
    </div>
    <div class="container d-flex form-wrapper justify-content-start pt-5 p-3">
        <form class="mb-0 text-black d-flex flex-column gap-4">
            <h1>Booking Method</h1>
            <h2>Booked By</h2>
            <div class="d-flex justify-content-center mt-3">
                <fieldset class="radio-group d-flex flex-column justify-content-end">
                    <div class="form-control">
                      <input class="radio-button" id="radio1" type="radio" name="form" />
                      <label for="radio1">Cheque</label>
                    </div>
                    <div class="form-control">
                      <input class="radio-button" id="radio2" type="radio" name="form" checked />
                      <label for="radio2">Bank Transfer</label>
                    </div>
                  </fieldset>
            </div>
            <a class="next-btn" href="{{route('booking.details')}}">Next</a>

        </form>
    </div>
</div>

@endsection
