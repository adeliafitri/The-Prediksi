<?php 
// include('../koneksi/koneksi.php');
$judul_konten = $_POST['judul_konten'];
$tanggal_publish = $_POST['tanggal_publish'];
$deskripsi = $_POST['deskripsi'];
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file = $_FILES['file']['name'];
$direktori = 'file/'.$nama_file;

if(empty($deskripsi)){
	header("Location:index.php?include=addkonten&notif=tambahkosong");
}else if(empty($judul_konten)){
	header("Location:index.php?include=addkonten&notif=tambahkosong");
}else if(empty($tanggal_publish)){
	header("Location:index.php?include=addkonten&notif=tambahkosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=addkonten&notif=tambahkosong&
	jenis=file");
}else{
	$sql = "insert into `konten` (`judul_konten`, `deskripsi`, `image`, `tanggal_publish`) values ('$judul_konten', '$deskripsi', '$nama_file', '$tanggal_publish')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=konten&notif=tambahberhasil");	
}
?>