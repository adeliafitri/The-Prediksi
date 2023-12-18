<?php 
// include('../koneksi/koneksi.php');
$nama_product = $_POST['nama_product'];
$deskripsi = $_POST['deskripsi'];
$link_toko = $_POST['link_toko'];
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file = $_FILES['file']['name'];
$direktori = 'file/'.$nama_file;

if(empty($deskripsi)){
	header("Location:index.php?include=addproduct&notif=tambahkosong");
}else if(empty($nama_product)){
	header("Location:index.php?include=addproduct&notif=tambahkosong");
}else if(empty($link_toko)){
	header("Location:index.php?include=addproduct&notif=tambahkosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=addproduct&notif=tambahkosong&
	jenis=file");
}else{
	$sql = "insert into `products` (`nama_product`, `deskripsi`, `image`, `link_toko`) values ('$nama_product', '$deskripsi', '$nama_file', '$link_toko')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=product&notif=tambahberhasil");	
}
?>