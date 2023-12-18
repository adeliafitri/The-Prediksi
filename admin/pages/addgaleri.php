<div class=" position-relative pt-5 mt-lg-4 mt-xl-5">
        <div class="row justify-content-center">
            <div class=" card col-md-4 mt-5">
                <h2 class="text-center mb-4 pt-3">Tambah Image</h2>
                <form action="index.php?include=proses-addgaleri" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="nama_image">Nama Image</label>
                        <input type="text" class="form-control" id="nama_image" name="nama_image" placeholder="Nama Image">
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
