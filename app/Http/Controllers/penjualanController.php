<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class penjualanController extends Controller
{
    function index(){
    $produk = DB::table("produk")->get();
    $pelanggan = DB::table("pelanggan")->get();

    
    $penjualan = DB::table("penjualan")->latest()->first();

    $idPenjualan = "";
    if($penjualan->status=="selesai")
      {$idPenjualan = $penjualan->PenjualanID + 1;
   }
   else{
      $idPenjualan = $penjualan->PenjualanID;
   }

   // return $idPenjualan;
   $detailpenjualan = DB::table("detailpenjualan")->where("PenjualanID",$idPenjualan)
   ->join("produk","detailpenjualan.produkID","=",'produk.produkID')
   ->get();
   
     return view("tambah_penjualan",['detailpenjualan'=> $detailpenjualan,'idPenjualan' => $idPenjualan,'produk' => $produk,'pelanggan'=> $pelanggan]);
    }
    function store(Request $request){

      $produk = DB::table('produk')->where('produkID',$request->produk)->first();
     
      $DataPenjualan = DB::table('penjualan')->where('PenjualanID',$request->idPenjualan)->first();
      if(!$DataPenjualan){
      $penjualan = DB::table("penjualan")->insert([
         'PenjualanID' => $request->idPenjualan,
         'TanggalPenjualan' => date("Y-m-d"),
         'TotalHarga' => 0,
         'PelangganID' => $request->pelanggan,
         'status' => "pending"
      ]);
   }

      if($produk->Stok - $request->qty < 0){
      return redirect()->back()->with("info","Stok Tidak Mencukupi");
   }else{
      $detailpenjualan = DB::table("detailpenjualan")->insert([
         'PenjualanID'=> $request->idPenjualan,
         'produkID'=>$request->produk,
         'JumlahProduk'=>$request->qty,
         'Subtotal'=> $request->qty * $produk->Harga

      ]);



      DB::table("produk")->where('produkID',$request->produk)->update(['stok'=>$produk->Stok - $request->qty]);
      
      
      return redirect()->back();

    }
    }
    function checkout(Request $request){
      $update_data= DB::table('penjualan')->where('penjualanID',$request->idPenjualan)->update([
         'status'=> "selesai",
         'Total_harga'=> $request->totalharga
      ]);
   
         return redirect()->back()->with("succes","Penjualan Telah Berhasil Ya....");
      }
      function detail_penjualan($id){
         $penjualan = DB::table('penjualan')->where('penjualanID',$id)->get();
         $detailPenjualan = DB::table('detailpenjualan')->where('penjualanID',$id)
         ->join('produk','detailpenjualan.produkID','=','produk.produkID')
         ->get();


         return view("detail",['penjualan'=> $penjualan,'penjualanID' => $id,'detailpenjualan' => $detailPenjualan,'penjualanID'=> $id]);
      }
    }
   