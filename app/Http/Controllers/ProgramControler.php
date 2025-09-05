<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramControler extends Controller
{
    public function index(){
        return view('frontend.program.index'); 

    } 
    public function program(){
        return view('frontend.program.program'); 

    }   
}
