
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>penjualan</title>
</head>
<body>
<style>
        p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        background-color: pink;
        }
        p2{
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        top: 8px;
        right: 16px;
       
        }
        p1{
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        }
        body{
          background-color: darkolivegreen;
        }
        .qmi{
            color: #ffffff;
            font-family: ;
        }
        select{
          width: 200px;
          padding: 10px;
        }
        input{
          width: 200px;
          padding: 10px;

        }
        .ui{
          position: absolute;
          top:90px;
          right: 0;
          width: 600px;
          height: 100px;
          left: 350px;
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse
      
        }
        
    </style>
        <p>Tambah Produk</p>
    <form action='{{url("/tambah_penjualan") }}' method="post">
      @method('POST')
      @csrf
    <p1>Produk</p1><br>
    <input type="hidden" name="idPenjualan" value="{{$idPenjualan}}"/>
        <select aria-label="Default select example" name="produk">
          
            <option selected>Product</option>
      {!--
        
        {"ProdukID":6,"NamaProduk":"powerf","Harga":1000,"Stok":1}
        
        --}
    

    @foreach($produk as $produk)
  <option value="{{$produk->ProdukID}}">{{$produk->NamaProduk}}</option>
  @endforeach
</select><br><br>
<input type="number" name="qty" min="1" max="100" />

<br><br>

<button type="submit" class="btn btn-warning">Add</button>
<br>
<br>

<br>

<div class="ui">
<p2>ini Keranjang</p2>
<table class="table table-danger">
<thead>
    <tr>
      <th >Id</th>
      <th >Produk</th>
      <th >Harga</th>
      <th >Jumlah</th>
      <th >Total</th>
    
    </tr>
    <tbody>
      @foreach ($detailpenjualan as $detailpenjualan)
    <tr>
    <td>{{$detailpenjualan->PenjualanID}}</td>
      <td>{{$detailpenjualan->NamaProduk}}</td>
      <td>{{$detailpenjualan->Harga}}</td>
      <td>{{$detailpenjualan->JumlahProduk}}</td>
      <td>{{$detailpenjualan->Subtotal}}</td>

    </tr>
    </tbody>
    @endforeach
  </thead>
  </table>
  </div>
  <br>
  <p1>Pelanggan</p1><br>
<select aria-label="Default select example" name="pelanggan">
          <option selected>Pelanggan</option>

  @foreach($pelanggan as $pelanggan)
<option value="{{$pelanggan->pelangganID}}">{{$pelanggan->NamaPelanggan}}</option>
@endforeach
</select>
</body>
</html>