<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_product'])){
    $id_product = $_SESSION['id_product'];
    $nama_product= $_POST['nama_product'];
    $deskripsi= $_POST['deskripsi'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    //get image 
    $sql_f = "SELECT `image` FROM `products` WHERE `id`='$id_product'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image= $data_f[0];
        // $psword= $data_f[1];
        //echo $foto;
    }

    if(empty($nama_product)){
        header("Location:index.php?include=editproduct&notif=editkosong&jenis=nama-product");
    }else if(empty($deskripsi)){
        header("Location:index.php?include=editproduct&notif=editkosong&jenis=deskripsi");
    }else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `products` set `nama_product`='$nama_product', `deskripsi`='$deskripsi', `image`='$nama_file'
	        WHERE `id`='$id_product'";
	        mysqli_query($koneksi,$sql);
        }
        else{
	        $sql = "UPDATE `products` set `nama_product`='$nama_product', `deskripsi`='$deskripsi', `image`='$image'
	        WHERE `id`='$id_product'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=product&notif=editberhasil");	
    }
}
?>