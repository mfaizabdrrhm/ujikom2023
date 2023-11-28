<?php

namespace App\Http\Controllers;
 
use app\Http\Controllers\kasircontroller;
use Illuminate\Http\Request;


class kasircontroller extends Controller
{
    function Dashboard(){
        return view('Dashboard');
    }
}
