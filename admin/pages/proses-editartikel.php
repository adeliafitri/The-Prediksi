<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_artikel'])){
    $id_artikel = $_SESSION['id_artikel'];
    $judul_artikel= $_POST['judul_artikel'];
    $isi_artikel= $_POST['isi_artikel'];
    $tanggal_publish= $_POST['tanggal_publish'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    //get image 
    $sql_f = "SELECT `image` FROM `artikel` WHERE `id`='$id_artikel'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image= $data_f[0];
        // $psword= $data_f[1];
        //echo $foto;
    }

    if(empty($judul_artikel)){
        header("Location:index.php?include=editartikel&notif=editkosong&jenis=judul-artikel");
    }else if(empty($isi_artikel)){
        header("Location:index.php?include=editartikel&notif=editkosong&jenis=isi_artikel");
    }else if(empty($tanggal_publish)){
        header("Location:index.php?include=editartikel&notif=editkosong&jenis=tanggal-publish");
    }else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `artikel` set `judul_artikel`='$judul_artikel', `isi_artikel`='$isi_artikel', `tanggal_publish`='$tanggal_publish', `image`='$nama_file'
	        WHERE `id`='$id_artikel'";
	        mysqli_query($koneksi,$sql);
        }
        else{
	        $sql = "UPDATE `artikel` set `judul_artikel`='$judul_artikel', `isi_artikel`='$isi_artikel', `tanggal_publish`='$tanggal_publish', `image`='$image'
	        WHERE `id`='$id_artikel'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=artikel&notif=editberhasil");	
    }
}
?>