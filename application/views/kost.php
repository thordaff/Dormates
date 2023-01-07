<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/layout.css">

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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('Beranda');?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Kost');?>">Kost</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Heroes Content Start -->

    <section class="content-kost">
        <div class="container">
            <div class="d-flex flex-wrap">
                <?php foreach($show as $s) :?>
                    <div class="card me-5" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $s['nama_kost']?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $s['alamat']?></h6>
                            <h6 class="card-subtitle mb-2 text-muted">+<?php echo $s['no_telp']?></h6>
                            <p class="card-text mt-3">Kost Milik <b><?php echo $s['username']?></b></p>
                            <a href="#" class="card-link btn btn-sm" style="margin-left: 150px; border: 1px solid black; border-radius: 20px;">Booking Kamar</a>
                        </div>
                    </div>
                <?php endforeach ;?>
            </div>
        </div>
    </section>

    <!-- Heroes Content End -->

    <!-- footer Start -->

    <footer class="position-relative">
        <div class="container">
            <div class="text-footer text-center">
                <p>Dormates - Tempat Tinggal Sementara Mu</p>
            </div>
        </div>
    </footer>

    <!-- footer End -->
      

    <!-- JS File -->
    <script src="assets/js/function.js"></script>
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
   
  </body>
</html>