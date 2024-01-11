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

    // public function signup(){
    //     return view('auth.signup');
    // }

    // public function verification(){
    //     return view('auth.verification');
    // }

    // public function welcomeDashboard(){
    //     return view('auth.welcomeDashboard');
    // }
    
}
