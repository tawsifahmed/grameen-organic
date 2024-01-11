<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingMethod()
    {
        // this is path of the login page
        return view('booking.bookingMethod');
    }

    public function bookingDetails(){
        return view('booking.bookingDetails');
    }

    public function chequeSubmission(){
        return view('booking.chequeSubmission');
    }

    public function bankTransfer(){
        return view('booking.bankTransfer');
    }

    public function bookingConfirmation(){
        return view('booking.bookingConfirmation');
    }

    // public function welcomeDashboard(){
    //     return view('auth.welcomeDashboard');
    // }
    
}
