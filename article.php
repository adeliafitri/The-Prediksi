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
        body{
            overflow: auto;
        }
        .galery-item{
            transition: transform 1s;
        }
        .galery-item:hover{
            transform: scale(1.1);
        }
        .custom-img {
    max-width: 100%; /* Lebar maksimum 100% dari parent element */
    max-height: 200px; /* Tinggi maksimum 200 piksel, sesuaikan dengan kebutuhan Anda */
    width: auto; /* Menyesuaikan lebar agar tetap sesuai dengan kontennya */
    height: auto; /* Tinggi disesuaikan agar tidak merubah aspek ratio */
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
                      <a class="nav-link" aria-current="page" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#galery">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#partner">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
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
    <!-- Galery -->
    <section id="galery-detail" class="position-relative pt-5 ">
        <div class="container position-relative z-5 pt-5 mt-lg-4 mt-xl-5 animate__animated animate__fadeIn">
            <h1 class="text-center">Article</h1>
            <!-- <div class="text-center"> -->
            <nav class="d-flex justify-content-center mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Article</li>
            </ol>
            </nav>
            <!-- </div> -->
            <div class="row justify-content-center mb-5">
            <?php
                $sql_b = "SELECT `judul_artikel`, `isi_artikel`, `image`, `tanggal_publish` FROM `artikel` ORDER BY `id` DESC";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $judul_artikel = $data_b[0];
                            $isi_artikel = $data_b[1];
                            $image = $data_b[2];
                            $tanggal_publish = $data_b[3];
                    ?>
                <div class="card col-md-3 me-3 mb-3 p-0">
                    <img src="assets/images/<?php echo $image?>" class="card-img-top custom-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $judul_artikel?></h5>
                        <p class="card-text"><?php echo $isi_artikel?></p>
                        <p class="card-text"><small class="text-body-secondary"><?php 
                        $tanggal_publish = date('d F Y' ,strtotime($data_b[3]));
                        echo $tanggal_publish?></small></p>
                    </div>
                </div>
                <?php }?>
                <!-- <div class="card col-md-3 me-3 mb-3 p-0">
                    <img src="assets/images/galery-2.jpg" class="card-img-top custom-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Touring Solo-Jogja</h5>
                        <p class="card-text">Genk motor selebritas, The Prediksi kembali menunjukkan aksinya. Genk motor yang diketuai Andre Taulany ini melakukan touring di sela-sela kesibukan masing-masing. Apalagi touring kali ini dilakukan di luar kota.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card col-md-3 me-3 mb-3 p-0">
                    <img src="assets/images/galery-3.jpg" class="card-img-top custom-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Touring Puncak</h5>
                        <p class="card-text">The Prediksi kembali melakukan touring bersama para anggotanya. Geng motor yang diinisiasi oleh Andre Taulany itu memang kerap melakukan perkumpulan maupun aktivitas touring ke kota-kota di Indonesia bahkan pernah hingga ke Amerika.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div> -->
                <!-- <img src="assets/images/galery-2.jpg" class="galery-item rounded col-md-3" alt="...">
                <img src="assets/images/galery-3.jpg" class="galery-item rounded col-md-3" alt="...">
                <img src="assets/images/galery-4.jpg" class="galery-item rounded col-md-3" alt="..."> -->
            </div>
            <!-- <a role="button" href="galeri.php" class="btn btn-outline-danger mb-5">More Pictures</a> -->
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