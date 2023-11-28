<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
<style>
     .login{
        text-align: center;
        border:3px solid black;
        background-color: blueviolet;
        width: 300px;
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 30%;
    }
    body{
      background-color: gray;
    }
    
  </style>
<body>
<div class="container">
        <form action="" method="POST" class="login-email">
        <input name="tujuan" type="hidden" value="login">
             <div class="login">
             <p class="login-text" style="font-size: 2rem; font-weight: 800;">login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required autocomplete="off">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required autocomplete="off">
            </div>
            <div class="input-group">
            <button class="btn btn-outline-black" type="button">registrasi</button>
            <button class="btn btn-outline-black" type="submit">login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun?</a></p>
        </form>
    </div>
    </body>
</html>