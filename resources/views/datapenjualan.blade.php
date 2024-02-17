<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>data penjualan</title>
  <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
  </head>
  <style>
      body{
        background-color: darkgray;
      }
  </style>
  <body>
    
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="nav-link active" href="{{url('Dashboard')}}"><button class="btn btn-primary me-md-2" type="button">kembali</button>
  
   </div>
      <div class="container-fluid">
        <h1><span class="navbar-brand" href="#">data penjualan</a></h1>
<div class = "container">
  <br>
  <table class="table table-dark table-striped border-warning">
  <thead>
    <tr>
    <th scope="col">tanggal</th>
      <th scope="col">pelanggan</th>
      <th scope="col">total</th>
      <th scope="col">opsi</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">24-10-20223</th>
      <td>faizz</td>
      <td>16.000</td>
      <td><a href="{{url('detailpenjualan')}}"class="btn btn-outline-primary"><img src="" alt=""width="40" height="35">detail</a> 
      
    </tr>
      </tbody>
 </table>
</div>
</body>
</html>
