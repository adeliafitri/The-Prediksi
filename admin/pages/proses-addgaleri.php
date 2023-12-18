<?php 
// include('../koneksi/koneksi.php');
$nama_image = $_POST['nama_image'];
// $deskripsi = $_POST['deskripsi'];
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file = $_FILES['file']['name'];
$direktori = 'file/'.$nama_file;

if(empty($nama_image)){
	header("Location:index.php?include=addgaleri&notif=tambahkosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=addgaleri&notif=tambahkosong&
	jenis=file");
}else{
	$sql = "insert into `galeri` (`nama_image`, `image`) values ('$nama_image', '$nama_file')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=galeri&notif=tambahberhasil");	
}
?>