<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_event = $_GET['data'];
		//hapus data profil
		$sql_dh = "delete from `events` where `id` = '$id_event'";
		mysqli_query($koneksi,$sql_dh);
	}
}
?>

<section class="position-relative pt-5">
    <div class="container position-relative pt-5 mt-lg-4 mt-xl-5">
    <div class="row mb-2">
        <div class="col-sm-8 col-md-10">
            <h3>Data Event</h3>
        </div>
        <div class="col-sm-4 col-md-2 justify-content-end">
            <a href="index.php?include=addevent" class="btn btn-danger">Add Event</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Event</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Image</th>
            <th style="width: 150px;">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql_b = "SELECT `id`, `nama_event`, `deskripsi`, `image` FROM `events` ORDER BY `id`";
        $query_b = mysqli_query($koneksi,$sql_b);
         $no = 1;
         while($data_b = mysqli_fetch_row($query_b)){
                          $id= $data_b[0];
                          $nama_event = $data_b[1];
                          $deskripsi = $data_b[2];
                          $image = $data_b[3];
                    ?>
            <tr>
            <th scope="row"><?php echo $no;?></th>
            <td><?php echo $nama_event;?></td>
            <td><?php echo $deskripsi;?></td>
            <td>
                <img src="file/<?php echo $image;?>" alt="" width="100">
            </td>
            <td>
                    <a href="index.php?include=editevent&data=<?php echo $id;?>" class="btn btn-info text-white mb-1">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Edit
                    </a>
                    <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama_event; ?>?')) window.location.href = 'index.php?include=event&aksi=hapus&data=<?php echo $id;?>&notif=hapusberhasil'" class="btn btn-danger" class="btn btn-danger text-white mb-1">
                        <i class="fa-solid fa-trash-can"></i>
                        Delete
                    </a>
                </td>
            </tr>
            <?php $no++; }?>
        </tbody>
    </table>
    </div>
</section>