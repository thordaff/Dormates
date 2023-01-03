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

    <!-- Content Login Start -->

    <?php echo $this->session->flashdata('message'); ?>
    <section class="login-view">
      <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 25em; border-radius: 50px;">
          <div class="card-title mt-3 mx-auto">
            <h5>Dormates - Login</h5>
          </div>
          <div class="card-body mx-auto">
            <form action="<?php echo base_url('Auth/Login')?>" method="post">
              <div class="email">
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email">
              </div>
              <div class="password mt-3">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password">
              </div>
              <div class="button-log mt-3 mb-3">
                <button>Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <p>Belum punya akun ? <a href="<?php echo base_url();?>Auth/register">Daftar</a></p>
      </div>
    </section>

    <!-- Content Login End -->

    <!-- JS File -->
    <script src="/assets/js/function.js"></script>
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
   
  </body>
</html>