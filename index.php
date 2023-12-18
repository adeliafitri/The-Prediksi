<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE PREDIKSI</title>
    <link rel="icon" href="assets/images/ThePrediksiLogo-fococlipping-standard.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css"> -->
    <style>
        html{
            margin: 0;
            padding: 0;
            height: 100%;
        }
        /* body{
            margin: 0;
            padding: 0;
        } */
        .galery-item{
            transition: transform 1s;
        }
        .galery-item:hover{
            transform: scale(1.1);
        }
    </style>

</head>
<body class="bg-light mb-0 pb-0">
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg fixed-top bg-danger shadow-sm">
            <div class="container-fluid">
                <img src="assets/images/ThePrediksiLogo-fococlipping-standard.png" alt="Logo The Prediksi" width="70">
              <a class="navbar-brand" href="#home">The Prediksi</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">The Prediksi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galery">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partner">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="admin/index.php">Login</a>
                        <!-- <a class="btn btn-outline-light" href="#">Login</a> -->
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </nav>
    </header>

    <main>
            <!-- hero -->
    <section class="bg-danger position-relative min-vh-100 overflow-hidden pt-5" id="home">
        <div class="container position-relative z-5 text-center pt-5 mt-lg-4 mt-xl-5 animate__animated animate__fadeIn">
            <?php
            $sql_b = "SELECT `judul_konten`, `deskripsi`, `image` FROM `konten` WHERE `id`='3' ORDER BY `id`";
            $query_b = mysqli_query($koneksi,$sql_b);
            while($data_b = mysqli_fetch_row($query_b)){
                        //   $id= $data_b[0];
                          $judul_konten = $data_b[0];
                          $deskripsi = $data_b[1];
                          $image = $data_b[2];
                    ?>
            <h1 class="display-1 pt-4 mt-sm-3 text-white fw-bold"><?php echo $judul_konten;?></h1>
            <p class="display-5 mb-5 text-white"><?php echo $deskripsi;?></p>
            <?php }?>
            <a role="button" href="#about" class="btn btn-lg btn-outline-light mb-3">About Us</a> <br>
            <img src="admin/file/<?php echo $image;?>" class="img-fluid animate__animated animate__slideInLeft" alt="Hero-the-prediksi">
        </div>
    </section>

    <!-- about -->
    <section id="about">
        <div class="container py-5">
            <div class="row d-flex">
            <?php
                $sql_b = "SELECT `judul_konten`, `deskripsi`, `image`, `tanggal_publish` FROM `konten` WHERE `id` = 1 ORDER BY `id`";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $judul_konten = $data_b[0];
                            $deskripsi = $data_b[1];
                            $image = $data_b[2];
                    ?>
                <div class="col-lg-6 align-self-center mb-3">
                    <h1 class="mb-4"><?php echo $judul_konten;?></h1>
                    <p><?php echo $deskripsi;?></p>
                    <!-- <p>
                        <?php 
                        $tanggal_publish = date('d F Y' ,strtotime($data_b[3]));
                        echo $tanggal_publish?></p> -->
                </div>
                <div class="col-lg-6">
                    <img src="admin/file/<?php echo $image;?>" class="img-fluid" alt="about-prediksi">
                </div>
                <?php }?>
            </div>
        </div>
    </section>

    <!-- visi misi -->
    <!-- <section id="visi-misi">
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
            <h1 class="text-center mb-5">Visi Misi</h1>
                <div class="accordion col-md-9" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            VISI
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Menjadi klub motor yang menjadi pusat kegembiraan dan keceriaan bagi komedian-komedian Indonesia, di mana kebersamaan, kebebasan berekspresi, dan semangat positif menjadi pendorong utama dalam setiap perjalanan dan kegiatan klub.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            MISI
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>
                                <li>
                                    <h6>Menciptakan Kegembiraan:</h6>
                                    <p>Menjadi wadah yang menginspirasi dan menyemangati anggota klub untuk menciptakan momen kegembiraan melalui perjalanan dan kegiatan bersama.</p>
                                </li>
                                <li>
                                    <h6>Memperkuat Komunitas:</h6>
                                    <p>Membangun ikatan yang kuat antar anggota klub, menciptakan atmosfer yang inklusif, dan mendukung pertumbuhan personal dan profesional komedian-komedian Indonesia.</p>
                                </li>
                                <li>
                                    <h6>Berkolaborasi dengan Seniman:</h6>
                                    <p>Mengembangkan kemitraan dengan seniman dan komedian lainnya untuk memperluas jaringan, berbagi ide kreatif, dan meningkatkan kualitas acara dan perjalanan klub.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Product -->
    <section id="product">
        <div class="container py-5">
            <h1 class="text-center mb-5">Products</h1>
            <div class="row justify-content-center">
            <?php
                $sql_b = "SELECT `nama_product`, `deskripsi`, `image`, `link_toko` FROM `products` ORDER BY `id`";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $nama_product = $data_b[0];
                            $deskripsi = $data_b[1];
                            $image = $data_b[2];
                            $link_toko = $data_b[3];
                    ?>
                <div class="card col-md-3 m-3">
                    <img src="admin/file/<?php echo $image;?>" class="card-img-top" alt="<?php echo $nama_product;?>">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $nama_product;?></h5>
                      <p class="card-text"><?php echo $deskripsi;?></p>
                      <a href="<?php echo $link_toko;?>" class="btn btn-danger">Grab It Fast</a>
                    </div>
                </div>
                <?php }?>
                <!-- <div class="card col-md-3 m-3">
                    <img src="assets/images/product-2.jpg" class="card-img-top" alt="The Prediksi X Wrangler">
                    <div class="card-body">
                      <h5 class="card-title">The Prediksi X Wrangler</h5>
                      <p class="card-text">Mau keren kaya kite-kite? Mampir ke store Wrangler terdekat dan sebutin kode : THEPREDIKSIxWRANGLER dan dapetin tambahan diskon 10% khusus pembelian koleksi jeans Wrangler Raw Denim! Buruan periode terbatas.</p>
                      <a href="https://www.instagram.com/wranglerjeansid/" class="btn btn-danger">Grab It Fast</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Event -->
    <section id="event" class="bg-danger">
        <div class="container py-5">
            <h1 class="text-white text-center mb-5">Our Event</h1>
            <div class="row justify-content-center">
            <?php
                $batas = 3;
                $sql_b = "SELECT `nama_event`, `deskripsi`, `image` FROM `events` ORDER BY `id`  DESC limit $batas";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $nama_event = $data_b[0];
                            $deskripsi = $data_b[1];
                            $image = $data_b[2];
                            // $link_toko = $data_b[3];
                    ?>
                <div class="card col-md-3 m-3 p-0">
                    <img src="admin/file/<?php echo $image?>" class="card-img-top" alt="<?php echo $nama_event;?>">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $nama_event;?></h5>
                    </div>
                </div>
                <?php }?>
                <!-- <div class="card col-md-3 m-3 p-0">
                    <img src="assets/images/galery-4.jpg" class="card-img-top" alt="The Prediksi X Wrangler">
                    <div class="card-body">
                      <h5 class="card-title">The Prediksi | Acara Halal Bihalal</h5>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Galery -->
    <section id="galery" class="bg-danger">
        <div class="container text-center py-5">
            <h1 class="text-white mb-5">Our Galery</h1>
            <div class="row mb-5 justify-content-center">
            <?php
                $batas = 4;
                $sql_b = "SELECT `nama_image`, `image` FROM `galeri` ORDER BY `id`  DESC limit $batas";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $nama_image = $data_b[0];
                            // $deskripsi = $data_b[1];
                            $image = $data_b[1];
                            // $link_toko = $data_b[3];
                    ?>
                <img src="admin/file/<?php echo $image?>" class="galery-item rounded col-md-3" alt="<?php echo $nama_image?>">
                <?php }?>
                <!-- <img src="assets/images/galery-2.jpg" class="galery-item rounded col-md-3" alt="...">
                <img src="assets/images/galery-3.jpg" class="galery-item rounded col-md-3" alt="...">
                <img src="assets/images/galery-4.jpg" class="galery-item rounded col-md-3" alt="..."> -->
            </div>
            <a role="button" href="galeri.php" class="btn btn-outline-light">More Pictures</a>
        </div>
    </section>

    <!-- partner -->
    <section id="partner">
        <div class="container py-5">
            <h1 class="text-center mb-5">Our Partner</h1>
            <div class="row">
                <div class="row mb-5 justify-content-center">
                <?php
                $batas = 4;
                $sql_b = "SELECT `nama_partner`, `image` FROM `partners` ORDER BY `id` limit $batas";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $nama_partner = $data_b[0];
                            // $deskripsi = $data_b[1];
                            $image = $data_b[1];
                            // $link_toko = $data_b[3];
                    ?>
                <img src="admin/file/<?php echo $image?>" class="col-md-3" alt="<?php echo $nama_partner?>">
                <?php }?>
                    <!-- <img src="assets/images/galery-4.jpg" class="galery-item rounded col-md-3" alt="..."> -->
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="bg-dark text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mb-4 align-self-center">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.478949799!2d106.829518!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1700125698920!5m2!1sid!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 align-self-center">
                    <h1 class="display-1 fw-normal">Contacts</h1>
                    <p class="fs-4 mb-5">Get in touch with us</p>
                    <div>
                        <i class="fa-solid fa-location-dot fs-5"></i>
                        <span class="fs-5">Address</span><br>
                        <p class="fs-4">Jakarta, Indonesia</p>
                    </div>
                    <div>
                        <i class="fa-brands fa-instagram fs-5"></i>
                        <span class="fs-5">Instagram</span><br>
                        <p class="fs-4"><a href="https://www.instagram.com/theprediksi_" class="text-white" style="text-decoration: none;">@theprediksi_</a></p>
                    </div>
                    <div>
                        <i class="fa-brands fa-youtube"></i>
                        <span class="fs-5">Youtube</span><br>
                        <p class="fs-4"><a href="https://www.youtube.com/@theprediksi_official" class="text-white" style="text-decoration: none;">@theprediksi_official</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer class="bg-dark">
        <div class="cotainer py-2">
            <p class="text-center text-white">© All rights reserved. Made by <span class="fw-bold">Adelia Fitri</span></p>
        </div>
    </footer>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll('.navbar-nav a.nav-link');
    
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(innerLink => {
                        innerLink.classList.remove('active');
                    });
    
                    this.classList.add('active');
                });
            });
        });
    </script>
    
</body>
</html>