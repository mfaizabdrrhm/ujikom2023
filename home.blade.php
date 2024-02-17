<html lang="en">
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href=("bs/css/bootstrap.min.css")}}>
  </head>
<body>
  <style>
    h1{
        text-align: center;
        background-color: red;
    }
    .container-fluid{
        background-color: burlywood;
    }
    body{
        background-color: burlywood;
    }
    </style>
    <h1>home kasir</h1>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="nav-link active" href="{{url('login')}}"><button class="btn btn-outline-primary" type="button">login</button></a>
    <a class="nav-link active" href="{{url('register')}}"><button class="btn btn-outline-danger" type="button">register</button></a>
    <a class="nav-link active" href="{{url('Dashboard')}}"><button class="btn btn-outline-success" type="button">Dashboard</button></a>

   </div>
</nav>
</body>
</html>