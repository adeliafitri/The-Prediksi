<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_konten'])){
    $id_konten = $_SESSION['id_konten'];
    $judul_konten= $_POST['judul_konten'];
    $deskripsi= $_POST['deskripsi'];
    $tanggal_publish= $_POST['tanggal_publish'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    //get image 
    $sql_f = "SELECT `image` FROM `konten` WHERE `id`='$id_konten'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image= $data_f[0];
        // $psword= $data_f[1];
        //echo $foto;
    }

    if(empty($judul_konten)){
        header("Location:index.php?include=editkonten&notif=editkosong&jenis=judul-konten");
    }else if(empty($deskripsi)){
        header("Location:index.php?include=editkonten&notif=editkosong&jenis=deskripsi");
    }else if(empty($tanggal_publish)){
        header("Location:index.php?include=editkonten&notif=editkosong&jenis=tanggal-publish");
    }else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `konten` set `judul_konten`='$judul_konten', `deskripsi`='$deskripsi', `tanggal_publish`='$tanggal_publish', `image`='$nama_file'
	        WHERE `id`='$id_konten'";
	        mysqli_query($koneksi,$sql);
        }
        else{
	        $sql = "UPDATE `konten` set `judul_konten`='$judul_konten', `deskripsi`='$deskripsi', `tanggal_publish`='$tanggal_publish', `image`='$image'
	        WHERE `id`='$id_konten'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=konten&notif=editberhasil");	
    }
}
?>