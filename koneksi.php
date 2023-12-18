<?php
$koneksi = mysqli_connect("localhost","root","","klub_motor");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>