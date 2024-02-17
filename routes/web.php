<?php

use App\Http\Controllers\Kasir_Controller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\pelanggancontroller;
use Illuminate\Support\Facades\Route;

   


Route::get('/', function () {
    return view('welcome');
});
Route::post('/login',[Logincontroller::class,'login']);
Route::get('/login',[Logincontroller::class,'login'])->name("login");






Route::get('/home', function () {
    return view ('home');
});
Route::get('/pelanggan', function () {
   return view ('pelanggan');
});
Route::get('/datapenjualan', function () {
    return view ('datapenjualan');
 });
 Route::get('/penjualan', function () {
    return view ('penjualan');
 });
 Route::get('/detailpenjualan', function () {
    return view ('detailpenjualan');
 });
 Route::get('/Dashboard', function () {
   // return Auth()->user();
    return view ('Dashboard');
 });
Route::get('/tambahproduk', function () {
    return view ('tambahproduk');
 });

 
Route::get('/register', function () {
   return view ('register');
});
 Route::post('/register' , [Kasir_Controller::class,'proses_registrasi']);
 Route::get('/login' , [LoginController::class,'index']);
 Route::post('/login' , [LoginController::class,'login'])->name("login");

 

 
 Route::middleware(['auth'])->group(function () {
    
   // Route::get('/penjualan', [penjualanController::class, 'index']);
   
   Route::get('/detail_penjualan', [penjualanController::class,'detail_penjualan']);
   Route::get('/detail', [ProdukController::class, 'detail']);
   
   Route::get('/hapus_produk/{produkID}', [ProdukController::class,'hapus']);
   
   Route::post('/checkout', [PenjualanController::class,'checkout']);
   
   // Route::post('/tambah_penjualan', [PenjualanController::class,'store']);
   Route::get('/tambah_penjualan', [PenjualanController::class,'index']);
   // Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
   Route::post('/tambah_pro', [ProdukController::class,'proses_tambah']);
   
   Route::get ('/update_produk/{ProdukID}', [ProdukController::class,'update']);
   Route::post('/update_produk/{ProdukID}', [ProdukController::class,'proses_update']);
   
   
   
   Route::get('/update_pelanggan/{pelangganID}', [PelangganController::class,'update']);
   Route::post('/update_pelanggan/{pelangganID}', [PelangganController::class,'proses_update']);

   Route::get('/logout' , [LoginController::class,'logout']);
 
 Route::get('/hapus_produk/{produkID}',[ProdukController::class,'hapus']);
 Route::get('/update_produk/{produkID}',[ProdukController::class,'update']);
 Route::post('/update_produk/{produkID}',[ProdukController::class,'proses_update_produk']);

 Route::get('/detail/{produkID}',[penjualanController::class,'detail']);
 Route::get('/detail/{produkID}',[penjualanController::class,'detail']);

 Route::get('/produk' , [ProdukController::class,'produk']);

 Route::post('/tambahproduk' , [ProdukController::class,'tambahproduk']);

 Route::get('/tambahpelanggan',[pelangganController::class,'tambahpelanggan']);
 Route::post('/tambahpelanggan',[pelangganController::class,'proses_tambah_pelanggan']);

 Route::get('/update_pelanggan/{pelangganID}',[pelanggancontroller::class,'update']);
 Route::post('/update_pelanggan/{pelangganID}',[pelanggancontroller::class,'proses_update']);

 Route::GET('/Dashboard',[kasir_Controller::class, 'Dashboard']);


 Route::get('/pelanggan',[pelangganController::class,'index']);
 Route::get('/hapus_pelanggan/{pelangganID}', [pelanggancontroller::class,'hapus_pelanggan']);
   
   });






