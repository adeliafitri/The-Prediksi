    <div class="container position-relative pt-5 mt-lg-4 mt-xl-5">
        <div class="row justify-content-center">
            <div class=" card col-md-6 mt-5">
                <h3 class="text-center mb-4 pt-3">Tambah Konten</h3>
                <form action="index.php?include=proses-addkonten" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="judul_konten">Judul Konten</label>
                        <input type="text" class="form-control" id="judul_konten" name="judul_konten" placeholder="Judul Konten">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_publish">Tanggal Publish</label>
                        <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" placeholder="Tanggal Publish">
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
