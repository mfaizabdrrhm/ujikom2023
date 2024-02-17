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
        text-align: ;
        border:3px solid black;
        background-color: wheat;
        width: 300px;
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 30%;
    }
    a{
            text-align: center;
        }
    p{
        text-align: center;
    }
    body{
      background-color: gray;
    }
    </style>
<body>
<div class="container">
        <form action="login" method="POST" class="login-email">
        @method('POST')
          @csrf
        <input name="tujuan" type="hidden" value="login">
             <div class="login">
             <p class="login-text" style="font-size: 2rem; font-weight: 800;">login</p>
             <label>username</label>
            <div class="input-group">
                <input type="text" placeholder="username" name="username" required autocomplete="off">
            </div>
            <label>Password</label>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required autocomplete="off">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{url('register')}}"><button class="btn btn-drak" type="button">registrasi</button>
            <button class="btn btn-drak" type="submit">login</button>
        </div>

        </form>
    </div>
    </body>
</html>