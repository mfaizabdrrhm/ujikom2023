
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
<style>
   .register{
        text-align: ;
        border:3px solid black;
        background-color: gray;
        width: 300px;
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 50%;
        
        }
        a{
            text-align: center;
        }
       p{
        text-align: center;
       }
          body{
          background-color: blue;
    }
    
  </style>
<body>
    <div class="container">
        <form action="register" method="POST" class="login-email">
          @method('POST')
          @csrf
        <input name="tujuan" type="hidden" value="register">
             <div class="register">
             <p class="login-text" style="font-size: 2rem; font-weight: 800;">register</p>
             
             <label>nama</label>
             <div class="input-group">
            <input type="text" placeholder="nama" name="nama" required autocomplete="off">
            </div>
            <label>username</label>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required autocomplete="off">
            </div>
           
            <label>password</label>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required autocomplete="off">
            </div>
            <label>Level</label>
            <br>
                <select name="level">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-drak" type="submit">registrasi</button>
              <a href="{{url('login')}}"><button class="btn btn-drak"type="submit">login</button></a>
           </div>
        </form>
    </div>
    </body>
</html>