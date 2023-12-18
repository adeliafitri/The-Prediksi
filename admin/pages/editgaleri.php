<?php
if(isset($_GET['data'])){
	$id_galeri= $_GET['data'];
	$_SESSION['id_galeri']=$id_galeri;
	//get data mahasiswa
	$sql_m = "SELECT `nama_image` FROM `galeri` WHERE `id`='$id_galeri'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$nama_image= $data_m[0];
		// $deskripsi = $data_m[1];
        // $link_toko= $data_m[2];
        // $image = $data_m[3];
	}
}
?>

<div class=" position-relative pt-5 mt-lg-4 mt-xl-5">
        <div class="row justify-content-center">
            <div class=" card col-md-4 mt-5">
                <h2 class="text-center mb-4 pt-3">Edit Image</h2>
                <form action="index.php?include=proses-editgaleri" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="nama_image">Nama Image</label>
                        <input type="text" class="form-control" id="nama_image" name="nama_image" placeholder="Nama Image" value="<?php echo $nama_image?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                             <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="file">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                    <a href="index.php?include=galeri" class="btn btn-outline-dark btn-block mb-2">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-block mb-2">Save</button>
                </form>
            </div>
        </div>
    </div>
