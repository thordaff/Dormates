<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/layout.css">

    <title><?php echo $judul?></title>
  </head>
  <body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-lg-top shadow-sm p-3 mb-5 bg-body-tertiary mt-1">
        <div class="container">
            <a class="navbar-brand" href="#">Dormates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $user['username']?>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="<?php echo base_url('Auth/logout');?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Heroes Content Start -->

    <section class="form-addkost">
        <div class="container">
            <div class="d-flex justify-content-start">
                <form action="<?php echo base_url('Admin/Kost/AddKost');?>" method="post">
                    <div class="user_id">
                        <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                    </div>
                    <div class="nama">
                        <label for="nama_kost">Nama Kost</label><br>
                        <input type="text" name="nama_kost" id="nama_kost">
                    </div>
                    <div class="alamat">
                        <label for="alamat">Alamat Kost</label><br>
                        <input type="text" name="alamat" id="alamat">
                    </div>
                    <div class="telp">
                        <label for="no_telp">No Telepon Kost</label><br>
                        <input type="number" name="no_telp" id="no_telp">
                    </div>
                    <div class="button">
                        <button type="reset">Reset</button>
                        <button>Tambah Kost</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Heroes Content End -->


    <!-- footer Start -->

    <footer>
        <div class="container">
            <div class="text-footer text-center
            ">
                <p>Dormates - Tempat Tinggal Sementara Mu</p>
            </div>
        </div>
    </footer>

    <!-- footer End -->
      

    <!-- JS File -->
    <script src="/assets/js/function.js"></script>
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
   
  </body>
</html>