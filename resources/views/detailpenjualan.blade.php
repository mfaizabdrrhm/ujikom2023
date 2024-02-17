<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detail</title>
</head>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
  <style>
    body{
      background-color: grey
    }
    
    

  </style>
  <body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand">Detail penjualan</a>
        <a class="nav-link active" aria-current="page" a href="{{url('datapenjualan')}}"><button type="button" class="btn btn-outline-secondary">kembali</button></a>
      </div>
    </nav>
    <br>
<div class="container">
  <table class="table table-dark table-striped  border-primary">
  
    <thead>
      <tr>
        <th scope="col">nama produk</th>
        <th scope="col">harga</th>
        <th scope="col">qty</th>
        <th scope="col">subtotal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($detailpenjualan as $detailpenjualan)
      <tr>
        <td>{{$detailpenjualan->detailID}}</td>
        <td>{{$detailpenjualan->penjualanID}}</td>
        <td>{{$detailpenjualan->jumlah_produk}}</td>
        <td>{{$detailpenjualan->subtotal}}</td>
        
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
  
</body>
</html>