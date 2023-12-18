<?php
if(isset($_GET['data'])){
	$id_konten = $_GET['data'];
	$_SESSION['id_konten']=$id_konten;
	//get data mahasiswa
	$sql_m = "SELECT `judul_konten`, `deskripsi`, `tanggal_publish` FROM `konten` WHERE `id`='$id_konten'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$judul_konten = $data_m[0];
		$deskripsi = $data_m[1];
        $tanggal_publish= date('Y-m-d', strtotime($data_m[2]));
        // $image = $data_m[3];
	}
}
?>

    <div class="container position-relative pt-5 mt-lg-4 mt-xl-5">
        <div class="row justify-content-center">
            <div class=" card col-md-6 mt-5">
                <h3 class="text-center mb-4 pt-3">Edit Konten</h3>
                <div class="col-12 justify-content-center">
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                      <?php if($_GET['notif']=="tambahkosong"){?>
                          <div class="alert alert-danger bg-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
                      <?php }?>
                  <?php }?>
                </div>
                <form action="index.php?include=proses-editkonten" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="judul_konten">Judul Konten</label>
                        <input type="text" class="form-control" id="judul_konten" name="judul_konten" placeholder="Judul Konten" value="<?php echo $judul_konten?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="3"><?php echo $deskripsi?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_publish">Tanggal Publish</label>
                        <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" placeholder="Tanggal Publish" value="<?php echo $tanggal_publish?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                             <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="file">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                    <a href="index.php?include=konten" class="btn btn-outline-dark btn-block mb-2">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-block mb-2">Save</button>
                </form>
            </div>
        </div>
    </div>
