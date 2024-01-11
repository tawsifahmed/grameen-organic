@extends('layouts.booking')
@section('content')
    <div class="bank-transfer-info-wrapper">
        <div class="position-relative">
            <img class="img-fluid position-absolute top-0 end-0" src="{{ asset('assets/images/banners/booking-bg.svg') }}"
                alt="">
        </div>
        <div class="container d-flex form-wrapper justify-content-start pt-5 p-3">
            <form class="mb-0 text-black d-flex flex-column w-50 gap-2">
                <h1>Bank Transfer Instructions
                </h1>
                <div class="instruction-details">
                    <p>- Please deposit the amount as per your
                        order value directly to our bank
                        account either through cash, cheque or
                        BEFTN (Online Banking).
                    </p>
                    <p>
                        - Afterwards, you will have to share a clear
                        scanned copy/photo of the
                        deposit slip with us
                        for cash/ cheque (Kindly issue an account payee
                        cheque in
                        favor of "Grameen Organic Limited")
                        deposit made directly to our bank. (Please
                        mention
                        your contact number at the back of the cheque if you
                        are directly depositing
                        the cheque).
                    </p>
                    <p>- Funds can also be transferred using BEFTN. In this case, a screenshot of the
                        transaction needs to be shared with the bank name and date of transfer</p>
                    <p> - We will track the fund using your attachment of deposit slip/screenshot and send the invoice upon
                        confirmation from our bank.</p>

                    {{-- bank details info --}}
                    <p>Grameen Organic Bank Details
                        <br>
                        <br> 
                        Here is the Bank Details:
                        <br>
                        <br>
                        Bank Name: <br>
                        Branch Name: <br>
                        Account Name: <br>
                        Account Number: <br>
                        Routing Number:
                    </p>

                </div>
                <div class="styled-checkbox mt-5">
                    <input type="checkbox" id="my-checkbox" />
                    <label for="my-checkbox">I agree with the Terms and Conditions</label>
                </div>
                <a class="next-btn" href="{{ route('booking.confirmation') }}">Next</a>

            </form>
        </div>
    </div>
@endsection
