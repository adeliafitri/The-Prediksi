<?php 
// include('../koneksi/koneksi.php');
$nama_event = $_POST['nama_event'];
$deskripsi = $_POST['deskripsi'];
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file = $_FILES['file']['name'];
$direktori = 'file/'.$nama_file;

if(empty($deskripsi)){
	header("Location:index.php?include=addevent&notif=tambahkosong");
}else if(empty($nama_event)){
	header("Location:index.php?include=addevent&notif=tambahkosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=addevent&notif=tambahkosong&
	jenis=file");
}else{
	$sql = "insert into `events` (`nama_event`, `deskripsi`, `image`) values ('$nama_event', '$deskripsi', '$nama_file')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=event&notif=tambahberhasil");	
}
?>