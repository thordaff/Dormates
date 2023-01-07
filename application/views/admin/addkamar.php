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

    <section class="form-addkamar">
        <div class="container">
            <div class="d-flex justify-content-start">
                <?php echo form_open_multipart('Admin/Kamar/addkamar'); ?>
                    <div class="user_id">
                        <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                    </div>
                    <div class="No Kamar">
                        <label for="no_kamar">No Kamar</label><br>
                        <input type="text" name="no_kamar" id="no_kamar">
                    </div>
                    <div class="gambar">
                        <label for="gambar">Gambar Kamar</label><br>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="Luas Kamar">
                        <label for="luas_kamar">Luas Kamar</label><br>
                        <input type="text" name="luas_kamar" id="luas_kamar">
                    </div>
                    <div class="harga">
                        <label for="harga_kamar">harga Kamar</label><br>
                        <input type="number" name="harga_kamar" id="harga_kamar">
                    </div>
                    <div class="deskripsi">
                        <label for="deskripsi">Deskripsi Kost</label><br>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                    </div>
                    <div class="button">
                        <button type="reset">Reset</button>
                        <button>Tambah Kamar</button>
                    </div>
                <?php echo form_close()?>
            </div>
        </div>
    </section>

    <!-- Heroes Content End -->


    <!-- footer Start -->

    <footer>
        <div class="container">
            <div class="text-footer text-center">
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