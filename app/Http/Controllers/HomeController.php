<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function fundFarmer()
    {
        return view('pages.fundFarmer');
    }

    public function ourImpact()
    {
        return view('pages.ourImpact');
    }

    public function shortTerm()
    {
        return view('pages.shortTerm');
    }
}
