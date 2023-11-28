<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kasir</title>
</head>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
    <style>
        
        
        .container {
            background-color: gray;
        }
        .dashboard-item {
            width: 30%;
            padding: 20px;
            margin: 20px;
            float: left;
            border: 1px solid #ccc;
            text-align: center;
            
        }
    </style>
   <body>
    <div class="container">
        <h1>Dashboard Kasir</h1>
        <div class="dashboard-item">
            <h2>Stok</h2>
            <p><a href="stok.php">Kelola Stok</a></p>
        </div>
        <div class="dashboard-item">
            <h2>Pendataan</h2>
            <p><a href="pendataan.php">Lihat Data</a></p>
        </div>
        <div class="dashboard-item">
            <h2>Pembelian</h2>
            <p><a href="pembelian.php">Catat Pembelian</a></p>
        </div>
    </div>
    
   </body>
</body>
</html>