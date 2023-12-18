<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_partner'])){
    $id_partner = $_SESSION['id_partner'];
    $nama_partner= $_POST['nama_partner'];
    // $deskripsi= $_POST['deskripsi'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    //get image 
    $sql_f = "SELECT `image` FROM `partners` WHERE `id`='$id_partner'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image= $data_f[0];
        // $psword= $data_f[1];
        //echo $foto;
    }

    if(empty($nama_partner)){
        header("Location:index.php?include=editpartner&notif=editkosong&jenis=nama-partner");
    }else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `partners` set `nama_partner`='$nama_partner', `image`='$nama_file'
	        WHERE `id`='$id_partner'";
	        mysqli_query($koneksi,$sql);
        }
        else{
	        $sql = "UPDATE `partners` set `nama_partner`='$nama_partner', `image`='$image'
	        WHERE `id`='$id_partner'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=partner&notif=editberhasil");	
    }
}
?>