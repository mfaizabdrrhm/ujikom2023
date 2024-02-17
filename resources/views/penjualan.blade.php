<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>penjualan</title>
  <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
  </head>
  <style>
    h1{
        text-align: center;
    }
   body{
        background-color: darkolivegreen;
    }
    .table{
        
        width: 70%;
        margin: 20px auto;
        border-collapse: collapse;
        
      
    }
    .data{
     top: 50%px;
     right: 70px;
     left: 60%;
     font-size: 16px;
     width: 75%;
    }
    .p2{
      font-size: 16px;
      width: 50%;
    }
    .p1{
      font-size: 16px;
      width: 43%;
    }
     </style>
  <body>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="nav-link active" href="{{url('Dashboard')}}"><button class="btn btn-drak me-md-2" type="button">kembali</button>
  
   </div>
<div class="container-fluid">
        <h1><span class="navbar-brand" href="#">penjualan</a></h1>
    <div class = "container">
  <br>
  <table class="table table-dark table-sm">
  <thead>
    <tr>
    <th scope="col">nama</th>
      <th scope="col">harga</th>
      <th scope="col">qty</th>
      <th scope="col">subtotal</th>
      <th scope="col">opsi</th>
     </tr>
  </thead>
  <tbody>
    @foreach ($penjualan as $penjualan)
    <tr>
      <th scope="row">{{$penjualan->penjualanID}}</th>
      <td>{{$penjualan->tanggal_penjualan}}</td>
      <td>{{$penjualan->total_harga}}</td>
      <td>{{$penjualan->pelangganID}}</td>
      <td><a href="hapus.php"class="btn btn-outline-danger">hapus</a>
    </tr>
    @endforeach
      </tbody>
 </table>
</div>
<div class="data">
        <label>data produk</label>
        <br>
     <div class="p2">
    <div class="p2">
      <select class="form-select" id="floatingSelectGrid">
        <option selected>lihat produk</option>
        <option value="1">indomie</option>
        <option value="2">susu milk</option>
        <option value="3">gudang garam filter</option>
      </select>
      
    </div>
  </div>
        <br>
        <label>jumlah produk</label>
        <br>
        <input name="jumlah produk" type="text" required>
        <br>
  <button class="btn btn-success" type="button">Add</button>
   </div>
   <label>nama pelanggan</label>
        <br>
    <div class="p1">
    <div class="p1">
      <select class="form-select" id="floatingSelectGrid">
        <option selected>lihat pelanggan</option>
        <option value="1">faizz</option>
        <option value="2">adenn</option>
        <option value="3">ndree</option>
      </select>
      </div>
  </div>
        <br>
    <div class="p3">
        <label>total harga</label>
        <br>
        <input name="" type="text" required>
        <br>
    <button class="btn btn-primary" type="button">order</button>

    </body>
</html>
