<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('/public/Assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('/public/Assets/scss/login.css');?>">

    <title>Register</title>
  </head>
  <body id="first-page"> 
    <div class="container">
        <div class="row justify-content-center m-auto">
            <div class="col-4 m-5">
               <div class="card p-3">
                   <h3 class="text-center">DAFTAR</h3>
                    <form action="<?= base_url('/insert_user'); ?>" method="post">
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Masukkan Username" aria-describedBy required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" aria-describedby required>
                        </div>
                        <div class="form-group">
                            <label for="email">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Masukkan Password" aria-describedBy required>
                        </div>
                        <div class="form-group">
                            <label for="id_role">Role</label>
                            <select class="form-control" name="id_role" id="id_role">
                              <option value="1">Administrator</option>
                              <!-- <option value="2">Piket</option> -->
                              <option value="3">Staff</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <div class="sosial-auth-links text-center mt-2">
                            <a href="<?php echo base_url('/');?>" class="text-center">Sudah punya akun? <u>Masuk</u></a>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
  </body>

  <!-- Script JS -->
  <script src="<?=base_url('/public/Assets/js/bootstrap.min.js');?>"></script>
</html>