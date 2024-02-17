<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kasir</title>
</head>

<body>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
<style>
        p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        background-color: pink;
        }
        body{
          background-color: darkred;
        }
    </style>
    <p>Update Pelanggan</p>
    <form action={{url("/update_pelanggan/$pelanggan->pelangganID")}} method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
 
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="nama_pelanggan">{{$pelanggan->nama_pelanggan}}</textarea>

 
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="alamat">{{$pelanggan->alamat}}</textarea>
 
  <label for="exampleFormControlTextarea1" class="form-label">Nomer Telepon</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="nomer_telepon">{{$pelanggan->nomer_telepon}}</textarea>
 
<div class="container">
<a href="{{url('home')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Update</button>
</div>
</body>
</html>