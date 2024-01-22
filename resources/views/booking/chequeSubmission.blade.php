@extends('layouts.booking')
@section('content')
    <div class="cheque-info-wrapper">
        <div class="position-relative">
            <img class="img-fluid position-absolute top-0 end-0 d-xl-block d-none"
                src="{{ asset('assets/images/banners/booking-bg.svg') }}" alt="">
            <img class="img-fluid position-absolute top-0 end-0 d-xl-none mt-2"
                src="{{ asset('assets/images/banners/booking-bg-mbl.png') }}" alt="">
        </div>
        <div class="container-md d-flex form-wrapper justify-content-start pt-5 p-3">
            <form class="mb-0 text-black d-flex flex-column cheque-w-sm gap-2">
                <div class="form-details-wrapper">
                    <h1>Cheque Submission Instructions</h1>

                    <div class="instruction-details">
                        <p>- Kindly select your convenient date for the
                            Grameen Organic team to collect the cheque</p>
                        <p>- The cheque collection request would be valid for
                            three (3) working days from your booking.</p>
                        <p> - Our Grameen Organic team will call to confirm the
                            cheque collection date and time.</p>
                        <p>- Kindly issue an account payee cheque in favor of
                            "Grameen Organic Limited".</p>
                        <p>- Mention your contact number at the back of the cheque.</p>
                        <p>- The collected cheque will be submitted to Grameen Organic
                            bank account on the following bank working day.</p>
                        <p>- Payment confirmation invoice would be sent as soon as the
                            fund is realized in Grameen Organic bank account.</p>
                        <p>- Incase of any cheque deposit related problem, the client would
                            be communicated by our related Grameen Organic team.</p>
                        <p>- Collection time will be on working time from 11 am to 7 pm by our representative.
                            our office remains closed on Friday, Saturday.</p>
                        <p>- We collect the cheque if the amount is equivalent to or up to BDT 50,000.</p>

                    </div>
                </div>
                <div class="styled-checkbox mt-5">
                    <input type="checkbox" id="my-checkbox" />
                    <label for="my-checkbox">I agree with the Terms and Conditions</label>
                </div>
                <a class="next-btn" href="{{ route('bank.transfer') }}">Next</a>

            </form>
        </div>
    </div>
@endsection
