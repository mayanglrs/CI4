<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('/public/Assets/css/bootstrap.min.css');?>">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark"> 
    <div class="container">
        <div class="row justify-content-center m-5 " >
            <div class="col-4 m-5">
               <div class="card p-3">
                   <h3 class="text-center">LOGIN</h3>
                    <form action="<?=base_url("/auth");?>" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan E-mail"
                             required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Masukkan Password"" 
                             required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <div class="sosial-auth-links text-center mt-2">
                            <a href="<?php echo base_url('/register');?>" class="text-center">Belum punya akun? <u>Buat akun</u></a>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
   
    <script src="<?=base_url('/public/Assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>