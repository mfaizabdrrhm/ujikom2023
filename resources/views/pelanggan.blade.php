<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pelanggan</title>
  <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
  </head>
<style>
     body{
        background-color: darkcyan;
    }
    .container-fluid{
      text-align: center;
        background-color: darkcyan;
        

    }
    .table{
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
      
    }
    </style>
<body>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="nav-link active" href="{{url('Dashboard')}}"><button class="btn btn-warning me-md-2" type="button">kembali</button>
  
   </div>
      <div class="container-fluid">
        <h1><span class="navbar-brand" href="#">Data pelanggan</a></h1>
<div class = "container">
  <br>
  <table class="table table-dark table-sm">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">no telp</th>
      <th scope="col">opsi</th>
     </tr>
  </thead>
  <tbody>
    @foreach ($pelanggan as $pelanggan)
    <tr>
      <td>{{$pelanggan->pelangganID}}</td>
      <td>{{$pelanggan->nama_pelanggan}}</td>
      <td>{{$pelanggan->alamat}}</td>
      <td>{{$pelanggan->nomer_telepon}}</td>
      <td><a href="update_pelanggan/{{$pelanggan->pelangganID}}" class="btn btn-outline-success"><img src="" alt=""width="40" height="35">update</a> 
       <a href="hapus_pelanggan/{{$pelanggan->pelangganID}}"class="btn btn-outline-danger"><img src="" alt=""width="40" height="35">hapus</a>
  </td>
    </tr>
    @endforeach
      </tbody>
 </table>
</div>
<a class="nav-link active" href="{{url('tambahpelanggan')}}"><button class="btn btn-outline-warning" type="button">tambah</button></a> 

</body>
</html>
