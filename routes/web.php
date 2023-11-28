<?php

use App\Http\Controllers\kasircontroller;

use Illuminate\Support\Facades\Route;

   


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view ('login');
});
Route::get('/register', function () {
    return view ('register');
});

Route::GET('/Dashboard',[kasircontroller::class, 'Dashboard']);