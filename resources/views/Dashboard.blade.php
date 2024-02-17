<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kasir</title>
</head>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
    <style>
        body{
            background-color: blue;
        }
        p1{
            top: 50%px;
            right: 70px;
            left: 65%;
            font-size: 45px;
            width: 80%;
            bottom: 80%;
            text-align: center;
            color: goldenrod;

        }
        .container {
            background-color: wheat;
        }
        .dashboard-item {
            width: 30%;
            padding: 20px;
            margin: 20px;
            float: left;
            border: 1px solid #ccc;
            text-align: center;
            color: cyan;
            
        }
        
        
    </style>
   <body>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="nav-link active" href="{{url('logout')}}"><button class="btn btn-danger me-md-2" type="button">logout</button></a>
  
   </div>
   <div class="container">
        <h1>Dashboard Kasir</h1>
       <div class="dashboard-item">
            <h2>Stok</h2>
            <p><a class="nav-link active" href="{{url('produk')}}">Stok</a></p>
        </div>
        <div class="dashboard-item">
            <h2>data pelanggan</h2>
            <p><a class="nav-link active" href="{{url('pelanggan')}}">pelanggan</a></p>
        </div>
        <div class="dashboard-item">
            <h2>data penjualan</h2>
            <p><a class="nav-link active" href="{{url('datapenjualan')}}">lihat data</a></p>
        </div>
        <div class="dashboard-item">
            <h2>penjualan</h2>
            <p><a class="nav-link active" href="{{url('penjualan')}}">lihat penjualan</a></p>
        </div>
    </div>
      <p1>selamat datang {{auth()->user()->nama}} di dashboard kasir</p1>
    </body>
</html>