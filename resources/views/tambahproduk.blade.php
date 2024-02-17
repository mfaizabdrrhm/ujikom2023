<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah produk</title>
  <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
  </head>
  <style>
     p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        background-color: pink;
        }
        body{
          background-color: grey;
        }
        .m1{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

  </style>
  <body>
  <div class="input-group has-validation">
  <span class="input-group-text">tambah produk</span>
  </div>
</div>
<form action="/tambahproduk" method="post">
  @method ('post')
  @csrf
  <div class="container">
        <label>data produk</label>
        <br>
        <input name="namaproduk" type="text" required>
        <br>
        <label>harga</label>
        <br>
        <input name="harga" type="text" required>
        <br>
        <label>stok</label>
        <br>
        <input name="Stok" type="text" required>
        <br>
        <div class="container">
         <a href="{{url('Stok')}}"><button type="submit" class="btn btn-info">Kembali</button</a>
         <button type="submit" class="btn btn-info" style="margin-left:15px;">Tambah</button>
 </body></form>
</html>