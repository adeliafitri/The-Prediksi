<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_galeri'])){
    $id_galeri = $_SESSION['id_galeri'];
    $nama_image= $_POST['nama_image'];
    // $deskripsi= $_POST['deskripsi'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    //get image 
    $sql_f = "SELECT `image` FROM `galeri` WHERE `id`='$id_galeri'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image= $data_f[0];
        // $psword= $data_f[1];
        //echo $foto;
    }

    if(empty($nama_image)){
        header("Location:index.php?include=editgaleri&notif=editkosong&jenis=nama-image");
    }else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `galeri` set `nama_image`='$nama_image', `image`='$nama_file'
	        WHERE `id`='$id_galeri'";
	        mysqli_query($koneksi,$sql);
        }
        else{
	        $sql = "UPDATE `galeri` set `nama_image`='$nama_image', `image`='$image'
	        WHERE `id`='$id_galeri'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=galeri&notif=editberhasil");	
    }
}
?>