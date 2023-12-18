<?php 
// include('../koneksi/koneksi.php');
$judul_artikel = $_POST['judul_artikel'];
$tanggal_publish = $_POST['tanggal_publish'];
$isi_artikel = $_POST['isi_artikel'];
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file = $_FILES['file']['name'];
$direktori = 'file/'.$nama_file;

if(empty($isi_artikel)){
	header("Location:index.php?include=addartikel&notif=tambahkosong");
}else if(empty($judul_artikel)){
	header("Location:index.php?include=addartikel&notif=tambahkosong");
}else if(empty($tanggal_publish)){
	header("Location:index.php?include=addartikel&notif=tambahkosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=addartikel&notif=tambahkosong&
	jenis=file");
}else{
	$sql = "insert into `artikel` (`judul_artikel`, `isi_artikel`, `image`, `tanggal_publish`) values ('$judul_artikel', '$isi_artikel', '$nama_file', '$tanggal_publish')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=artikel&notif=tambahberhasil");	
}
?>