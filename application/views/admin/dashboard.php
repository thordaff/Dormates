<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
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

    <section class="img">
        <div class="d-flex justify-content-start">
            <div class="photo"></div>
        </div>
    </section>

    <section class="content-kost">
        <?php foreach($show as $s):?>
        <div class="d-flex justify-content-center">
            <h4><?php echo $s['nama_kost']?></h4>
        </div>
        <?php endforeach;?>
        <hr class="mt-2 mb-5 mx-auto" width="50%">
        <div class="container">
            <div class="d-flex flex-column">
            <?php foreach($show as $s):?>
                <div class="informs">
                    <h5 class="fw-bold">Informasi Kost</h5>
                    <div class="row row-cols-2">
                        <div class="col-2 alamat">
                            <p>Alamat</p>
                            <hr>
                            <p><?php echo $s['alamat']?></p>
                        </div>
                        <div class="col-2 telp">
                            <p>No Telepon</p>
                            <hr>
                            <p><?php echo $s['no_telp']?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
                <div class="kamar mt-5">
                    <h5 class="fw-bold">Kamar Kost</h5>
                    <div class="d-flex flex-wrap">
                        <?php foreach($showK as $s):?>
                            <div class="card my-2 me-2" style="width: 34rem;">
                                <div class="card-body d-flex justify-content-start">
                                    <img src="<?php echo base_url().'./img-kamar/'.$s['gambar']?>" width="200">
                                    <div class="content-body ms-5">
                                        <p>No kamar</p>
                                        <h1><?php echo $s['no_kamar']?></h1>
                                        <p><?php echo $s['deskripsi']?></p>
                                        <p><?php echo $s['status']?></p>
                                    </div>
                                    <div class="controller ms-5">
                                        <a href="<?php echo base_url('Admin/Kamar/edit/').$s['id_kamar'];?>">Edit</a>
                                        <a href="<?php echo base_url('Admin/Dashboard/delete/').$s['id_kamar'];?>">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="button-control ms-auto">
                <a class="btn btn-sm" type="button" href="<?php echo base_url('Admin/Kost');?>">Tambah Kost</a>
                <a class="btn btn-sm" type="button" href="<?php echo base_url('Admin/Kamar');?>">Tambah Kamar</a>
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