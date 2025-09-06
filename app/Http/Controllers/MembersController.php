<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
        public function member1(){
        return view('frontend.members.member1'); 

    }
        public function member2(){
        return view('frontend.members.member2'); 

    }
        public function member3(){
        return view('frontend.members.member3'); 

    }
        public function member4(){
        return view('frontend.members.member4'); 

    } 
        public function member5(){
        return view('frontend.members.member5'); 

    }
        public function member6(){
        return view('frontend.members.member6'); 

    }
}
