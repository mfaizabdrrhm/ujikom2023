<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    function index(){
    return view("login");
    }
    function login(Request $request){
        $datalogin = $request->only("username","password");
        if(auth::attempt($datalogin)){
            return Redirect('/Dashboard');
        }
        else{
            return redirect('/login ')->with("eror","coba lagi username/password salah");
        }
    }
    function logout(){
        auth::logout();
        return redirect('/login');
    }
    
}
