<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Kasir_Controller extends Controller
{
    function proses_registrasi(Request $request){
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $level = $request->level;
        
        DB::table('pegawai')->insert([
            'nama' => $nama,
            'username' => $username,
            'password' =>  hash::make ($password),
            'level' => $level,
        ]);
           return redirect('/login ');

    }
    
   function Dashboard(){
    return view("Dashboard");
   }



}