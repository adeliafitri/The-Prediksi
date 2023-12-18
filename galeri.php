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
        <div class="container text-center position-relative z-5 text-center pt-5 mt-lg-4 mt-xl-5 animate__animated animate__fadeIn">
            <h1>Our Galery</h1>
            <!-- <div class="text-center"> -->
            <nav class="d-flex justify-content-center mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galery</li>
            </ol>
            </nav>
            <!-- </div> -->
            <div class="row mb-5 justify-content-center">
            <?php
                // $batas = 4;
                $sql_b = "SELECT `nama_image`, `image` FROM `galeri` ORDER BY `id`";
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                            //   $id= $data_b[0];
                            $nama_image = $data_b[0];
                            // $deskripsi = $data_b[1];
                            $image = $data_b[1];
                            // $link_toko = $data_b[3];
                    ?>
                <img src="admin/file/<?php echo $image?>" class="galery-item rounded col-md-3 mb-2" alt="<?php echo $nama_image?>">
                <?php }?>
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