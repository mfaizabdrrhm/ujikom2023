<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stok Produk</title>
  <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
</head>
<style>
    body{
        background-color: white;
    }
    .container-fluid{
      text-align: center;
        background-color: gray;

    }
    .table{
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
      
    }
 </style>
<body>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="nav-link active" href="{{url('Dashboard')}}"><button class="btn btn-success me-md-2" type="button">kembali</button>
  
   </div>
    <div class="container-fluid">
        <h1><span class="navbar-brand" href="#">STOK PRODUK</a></h1>
<div class = "container">
  <br>
  <table class="table  table-bordered border-black">
  <thead>
    <tr>
      <th scope="col">produkID</th>
      <th scope="col">nama_produk</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
      <th scope="col">opsi</th>
      <a class="nav-link active" href="{{url('tambahproduk')}}"><button class="btn btn-outline-success" type="button">tambah</button></a>
    </tr>
  </thead>
  <tbody>
    @foreach ($produk as $produk)
    <tr>
      <td>{{$produk->produkID}}</td>
      <td>{{$produk->nama_produk}}</td>
      <td>{{$produk->harga}}</td>
      <td>{{$produk->stok}}</td>
      
      <td>
         <a href="update_produk/{{$produk->produkID}}"><button type="button"class="btn btn-outline-primary"><img src="" alt=""width="40" height="35">update</button></a> 
      <a href="hapus_produk/{{$produk->produkID}}"><button type="button" class="btn btn-outline-danger"><img src="" alt=""width="40" height="35">hapus</button></a>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</body>
</html>
