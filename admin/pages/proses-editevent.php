<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_event'])){
    $id_event = $_SESSION['id_event'];
    $nama_event= $_POST['nama_event'];
    $deskripsi= $_POST['deskripsi'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    //get image 
    $sql_f = "SELECT `image` FROM `events` WHERE `id`='$id_event'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image= $data_f[0];
        // $psword= $data_f[1];
        //echo $foto;
    }

    if(empty($nama_event)){
        header("Location:index.php?include=editevent&notif=editkosong&jenis=nama-event");
    }else if(empty($deskripsi)){
        header("Location:index.php?include=editevent&notif=editkosong&jenis=deskripsi");
    }else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `events` set `nama_event`='$nama_event', `deskripsi`='$deskripsi', `image`='$nama_file'
	        WHERE `id`='$id_event'";
	        mysqli_query($koneksi,$sql);
        }
        else{
	        $sql = "UPDATE `events` set `nama_event`='$nama_event', `deskripsi`='$deskripsi', `image`='$image'
	        WHERE `id`='$id_event'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=event&notif=editberhasil");	
    }
}
?>