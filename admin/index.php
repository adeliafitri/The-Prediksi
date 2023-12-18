<?php
session_start();
include('../koneksi.php');
if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if ($include=="proses-addkonten") {
        include('pages/proses-addkonten.php');
    }elseif ($include=="proses-addproduct") {
      include('pages/proses-addproduct.php');
    }elseif ($include=="proses-addevent") {
      include('pages/proses-addevent.php');
    }elseif ($include=="proses-addpartner") {
      include('pages/proses-addpartner.php');
    }elseif ($include=="proses-addgaleri") {
      include('pages/proses-addgaleri.php');
    }elseif ($include=="proses-addartikel") {
      include('pages/proses-addartikel.php');
    }elseif ($include=="proses-editkonten") {
      include('pages/proses-editkonten.php');
    }elseif ($include=="proses-editproduct") {
      include('pages/proses-editproduct.php');
    }elseif ($include=="proses-editevent") {
      include('pages/proses-editevent.php');
    }elseif ($include=="proses-editpartner") {
      include('pages/proses-editpartner.php');
    }elseif ($include=="proses-editgaleri") {
      include('pages/proses-editgaleri.php');
    }elseif ($include=="proses-editartikel") {
      include('pages/proses-editartikel.php');
    }elseif ($include=="proses-login") {
      include('proses-login.php');
    }elseif ($include=="logout") {
      include("pages/logout.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/header.php") ?>

</head>
<?php
  if (isset($_GET["include"])) {
      $include = $_GET["include"];
      // if (isset($_SESSION['id_user'])) {
?>
<body class="bg-light mb-0 pb-0 d-flex flex-column min-vh-100">
<?php include("includes/navbar.php") ?>
<?php 
    if ($include=="addkonten") {
      include("pages/addkonten.php");
    }elseif ($include=="editkonten") {
      include("pages/editkonten.php");
    }else if($include=="product") {
      include("pages/product.php");
    }else if($include=="addproduct") {
      include("pages/addproduct.php");
    }else if($include=="editproduct") {
      include("pages/editproduct.php");
    }else if($include=="event") {
      include("pages/event.php");
    }else if($include=="addevent") {
      include("pages/addevent.php");
    }else if($include=="editevent") {
      include("pages/editevent.php");
    }else if($include=="partner") {
      include("pages/partner.php");
    }else if($include=="addpartner") {
      include("pages/addpartner.php");
    }else if($include=="editpartner") {
      include("pages/editpartner.php");
    }else if($include=="galeri") {
      include("pages/galeri.php");
    }else if($include=="addgaleri") {
      include("pages/addgaleri.php");
    }else if($include=="editgaleri") {
      include("pages/editgaleri.php");
    }else if($include=="artikel") {
      include("pages/artikel.php");
    }else if($include=="addartikel") {
      include("pages/addartikel.php");
    }else if($include=="editartikel") {
      include("pages/editartikel.php");
    }else {
      include("pages/konten.php");
    }
    ?>
    
<?php include("includes/footer.php") ?>
<?php include("includes/script.php") ?>
</body>
<?php
}else {
    include("login.php");
  } ?>
</html>