<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donation1(){
        return view('frontend.donation.donation1'); 

    }
        public function donation2(){
        return view('frontend.donation.donation2'); 

    }
        public function donation3(){
        return view('frontend.donation.donation3'); 

    }
}
