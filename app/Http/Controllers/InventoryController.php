<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function farmerRegistration()
    {
        // this is path of the login page
        return view('inventory.farmerReg');
    }    
    
    public function community()
    {
        // this is path of the login page
        return view('inventory.community');
    }    
}