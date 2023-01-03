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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kost</a>
                    </li>
                </ul>
                <a class="btn btn-sm btn-login text-light" href="<?php base_url();?>Auth/login">Login</a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Heroes Header Start -->

    <section class="h-header">
        <div class="d-flex"> 
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 align-items-center">
                    <div class="col col-7">
                        <div class="header-title">
                            <h1>Cari tempat tinggal sementara mu sekarang !</h1>
                        </div>
                        <div class="header-body">
                            <p>Rumah sementara atau Kost yang akan membuatmu nayaman berada di kota kalian berpijak sekarang. Cari kost kamu sekarang dengan fasilitas nyaman dan terjangkau.</p>
                            <a href="" class="btn btn-sm text-light">Cari lebih banyak</a>
                        </div>
                    </div>
                    <div class="col col-5">
                        <img src="assets/images/chill.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Heroes Header End -->

    <!-- Heroes Facilities Start -->

    <section class="facilities">
        <div class="d-flex justify-content-center mb-5 pb-5">
            <div class="facilities-title">
                <h1>Yang Dormates tawarkan untuk mu</h1>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-evenly mt-5 pt-5">
                <div class="price">
                    <i class="fa-solid fa-money-bill"></i>
                    <h5 class="fw-bold">Harga terjangkau sesuai dengan budget kamu !</h5>
                </div>
                <div class="facilites">
                    <i class="fa-solid fa-spa"></i>
                    <h5 class="fw-bold">Fasilitas terbaik diharganya !</h5>
                </div>
                <div class="uptodate">
                    <i class="fa-solid fa-check"></i>
                    <h5 class="fw-bold">Website selalu update buat kamu selalu !</h5>
                </div>
                <div class="cs">
                    <i class="fa-solid fa-clock"></i>
                    <h5 class="fw-bold">24 jam jika kamu terkendala !</h5>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Heroes Facilities End -->

    <!-- Heroes Background Start -->

    <section class="contents">
        <div class="container">
            <div class="d-flex justify-content-start">
                <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                    <div class="col background-tittle">
                        <h1>Asal Usul berdirinya Dormates</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente odit assumenda nesciunt quia dicta non placeat est, ipsam dignissimos a.</p>
                    </div>
                    <div class="col background-illus">
                        <img src="assets/images/background.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Heroes Background End -->

    <!-- Hereos Team Start -->

    <section class="team">
        <div class="container mb-5">
            <div class="d-flex justify-content-center">
                <h1>Team dibalik Dormates</h1>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>Alhamda bar bakti nata</p>
                                <p>19.62.0187</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>Aisha shakila iedwan</p>
                                <p>21.62.0184</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>Nia mauliza</p>
                                <br>
                                <p>21.62.0185</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>Rosalinda christa sabella</p>
                                <p>21.62.0187</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hereos Team End -->

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