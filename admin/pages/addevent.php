<div class="container position-relative pt-5 mt-lg-4 mt-xl-5">
        <div class="row justify-content-center">
            <div class=" card col-md-6 mt-5">
                <h2 class="text-center mb-4 pt-3">Tambah Event</h2>
                <form action="index.php?include=proses-addevent" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <label for="nama_event">Nama Event</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder="Nama Event">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                             <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="file">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                    <a href="index.php?include=event" class="btn btn-outline-dark btn-block mb-2">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-block mb-2">Save</button>
                </form>
            </div>
        </div>
    </div>
