<?php 
// include('../koneksi/koneksi.php');
$nama_partner = $_POST['nama_partner'];
// $deskripsi = $_POST['deskripsi'];
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file = $_FILES['file']['name'];
$direktori = 'file/'.$nama_file;

if(empty($nama_partner)){
	header("Location:index.php?include=addpartner&notif=tambahkosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=addpartner&notif=tambahkosong&
	jenis=file");
}else{
	$sql = "insert into `partners` (`nama_partner`, `image`) values ('$nama_partner', '$nama_file')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=partner&notif=tambahberhasil");	
}
?>