@extends('layouts.booking')
@section('content')
    <div class="booking-confirmation-info-wrapper">
        <div class="position-relative">
            <img class="img-fluid position-absolute top-0 end-0" src="{{ asset('assets/images/banners/booking-bg.svg') }}"
                alt="">
        </div>
        <div class="container d-flex form-wrapper justify-content-start pt-5 p-3">
            <form class="mb-0 text-black d-flex flex-column w-50 gap-2">
                <p class="congratulation-text">Congratulations! Your booking has been confirmed
                    and updated successfully.
                </p>
                <div class="instruction-details">
                    <p>Dear "Client Name",
                    </p>
                    <p>Thank you for booking in our Potato Farm 10
                    </p>
                    <p>One of our team member will get in touch with you soon for
                        further discussion
                        on this matter. Meanwhile, for any queries,
                        please feel free to reach us at: <br>
                        Email: hello@grameenorganic.com <br>
                        Phone:
                        01713087929 <br>
                        Business hours: Saturday-Thursday (Excluding public holidays), from 11 AM to 6 PM.
                    </p>
                    <p>
                        Best wishes,
                        Team Grameen Organic
                    </p>
                </div>
                <a class="next-btn" 
                {{-- href="{{ route('booking.details') }}" --}}
                >My Farms</a>

            </form>
        </div>
    </div>
@endsection
