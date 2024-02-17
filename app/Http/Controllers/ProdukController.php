<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    function produk(){
        $produk = DB::table('produk')->get();

        return view('Stok', ['produk'=> $produk]);
    }
    
    function index(){
        $produk = DB::table("produk")->get();
        $pelanggan = DB::table("pelanggan")->get();

        return view("tambah_penjualan", ['produk'=>$produk, 'pelanggan'=>$pelanggan]);
    }
    function hapus($produkID){
           DB::table('produk')->where('produkID','=',$produkID)->delete();

           return redirect()->back();
    }
    function update($produkID){
        $produk= DB::table('produk')->where('produkID','=',$produkID)->first();
        
        return view('update',['produk'=> $produk]);
    }
    function proses_update_produk(Request $request,$produkID){

        $nama_produk = $request->produk;
        $harga = $request->harga;
        $stok = $request->stok;

        DB::table('produk')->where('produkID',$produkID) -> update([
         'nama_produk'=> $nama_produk,
         'Harga' => $harga,
         'Stok' => $stok,
        ]);
        return redirect('/produk');

    }
    function detail(){
        $detail = DB::table('produk')
        ->join('detail_penjualan', 'penjualanID','='. 'penjualanID')
        ->select('produk*','detail_penjualan.*')
        ->get();

        return view('detail',['detail_penjualan'=> $detail]);
    }
    function tambahproduk(Request $request){
        $namaproduk = $request->namaproduk;
        $harga = $request->harga;
        $Stok = $request->Stok;
        
        DB::table('produk')->insert([
            'nama_produk'=>$namaproduk,
            'harga'=>$harga,
            'stok'=>$Stok,
        ]);
        return redirect('/produk');

    }

    }

