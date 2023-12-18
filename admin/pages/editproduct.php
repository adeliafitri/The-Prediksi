<?php
if(isset($_GET['data'])){
	$id_product = $_GET['data'];
	$_SESSION['id_product']=$id_product;
	//get data mahasiswa
	$sql_m = "SELECT `nama_product`, `deskripsi`, `link_toko` FROM `products` WHERE `id`='$id_product'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$nama_product = $data_m[0];
		$deskripsi = $data_m[1];
        $link_toko= $data_m[2];
        // $image = $data_m[3];
	}
}
?>

<div class="overflow-y position-relative pt-5 mt-lg-4 mt-xl-5">
        <div class="row justify-content-center">
            <div class=" card col-md-6 mt-5">
                <h2 class="text-center mb-4 pt-3">Edit Product</h2>
                <form action="index.php?include=proses-editproduct" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="nama_product">Nama Product</label>
                        <input type="text" class="form-control" id="nama_product" name="nama_product" placeholder="Nama Product" value="<?php echo $nama_product?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"><?php echo $deskripsi?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="link_toko">Link Toko</label>
                        <input type="text" class="form-control" id="link_toko" name="link_toko" placeholder="Link Toko" value="<?php echo $link_toko?>">
                    </div>
                    <div class="form- mb-2">
                        <label for="image">Image</label>
                             <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="file">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                    <a href="index.php?include=product" class="btn btn-outline-dark btn-block mb-2">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-block mb-2">Save</button>
                </form>
            </div>
        </div>
    </div>
