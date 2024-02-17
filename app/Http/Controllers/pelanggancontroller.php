<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelanggancontroller extends Controller
{
    function index(){
        $pelanggan = DB::table('pelanggan')-> get();


        return view('pelanggan',['pelanggan'=> $pelanggan]);
    }
    function po(){
        $pelanggan = DB::table('pelanggan')-> get();


        return view('pelanggan',['pelanggan'=> $pelanggan]);
    }
    function hapus_pelanggan($PelangganID){
        DB::table('pelanggan')->where('pelangganID','=',$PelangganID)->delete();

        return redirect()->back();
    }
    function update($pelangganID){
        $pelanggan = DB::table('pelanggan')->where('pelangganID','=',$pelangganID)->first();
            
        return view('update_pe',['pelanggan'=> $pelanggan]);
    }
    function tambahpelanggan(){
        return view("tambahpelanggan");
      }
    function proses_update(Request $request,$pelangganID){


        $nama_pelanggan = $request->nama_pelanggan;
        $alamat = $request->alamat;
        $nomer_telepon = $request->nomer_telepon;
            
        DB::table('pelanggan')->where('pelangganID',$pelangganID) -> update([
            
            'nama_pelanggan' => $nama_pelanggan,
            'alamat' => $alamat,
            'nomer_telepon' => $nomer_telepon,
        ]);
        return redirect('/pelanggan');
    }

function proses_tambah_pelanggan(Request $request){
    $nama = $request->nama;
    $alamat = $request->alamat;
    $no = $request->no;
   

    DB::table('pelanggan')->insert([
        'nama_pelanggan' => $nama,
        'alamat' => $alamat,
        'nomer_telepon' => $no,
    ]);
    return redirect('/pelanggan');
}
  
}


