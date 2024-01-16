<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function personalInformation()
    {
        // this is path of the login page
        return view('account.personal');
    }

    public function bankInformation()
    {
        // this is path of the login page
        return view('account.bankInfo');
    }

    public function nomineeInformation()
    {
        // this is path of the login page
        return view('account.nomineeInfo');
    }

    
}
