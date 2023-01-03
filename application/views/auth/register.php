<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/auth.css">
    <link rel="stylesheet" href="/assets/css/layout.css">

    <title><?php echo $judul?></title>
  </head>
  <body>

    <!-- Content Register Start -->

    <section class="register-view">
      <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 25em; border-radius: 50px;">
          <div class="card-title mt-3 mx-auto">
            <h5>Dormates - Register</h5>
          </div>
          <div class="card-body mx-auto">
            <form action="<?php echo base_url('Auth/Register');?>" method="post">
              <div class="email">
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email">
              </div>
              <div class="username">
                <label for="username">username</label><br>
                <input type="text" name="username" id="username">
              </div>
              <div class="password">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password">
              </div>
              <div class="nama_lengkap">
                <label for="nama_lengkap">Nama Lengkap</label><br>
                <input type="nama_lengkap" name="nama_lengkap" id="nama_lengkap">
              </div>
              <div class="button-log mt-3 mb-3">
                <button>Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <p>Sudah punya akun ? <a href="<?php echo base_url();?>Auth/login">Login</a></p>
      </div>
    </section>

    <!-- Content Register End -->
      

    <!-- JS File -->
    <script src="/assets/js/function.js"></script>
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
   
  </body>
</html>