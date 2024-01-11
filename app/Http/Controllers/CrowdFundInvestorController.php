<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrowdFundInvestorController extends Controller
{
    public function userCrowdFundDashboard()
    {
        // this is path of the login page
        return view('crowd-fund-dashboard.crowdFundDashboard');
    }

    // public function bookingDetails(){
    //     return view('booking.bookingDetails');
    // }

    // public function chequeSubmission(){
    //     return view('booking.chequeSubmission');
    // }

    // public function bankTransfer(){
    //     return view('booking.bankTransfer');
    // }

    // public function bookingConfirmation(){
    //     return view('booking.bookingConfirmation');
    // }

    // public function welcomeDashboard(){
    //     return view('auth.welcomeDashboard');
    // }
    
}
