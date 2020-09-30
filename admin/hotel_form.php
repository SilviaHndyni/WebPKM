<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h3 class="text-center">Tambah Data</h3>
                    <form action="hotel_tambah.php" enctype="multipart/form-data" style="margin-left:4rem;" class="mx-4" name="frmAdd" id="frmAdd" method="POST">
                        <div class="form-group">
                            <label>nama :</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>alamat :</label>
                            <textarea class="form-control" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>link gmaps :</label>
                            <textarea class="form-control" name="link" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>gambar: </label><br/>
                            <input type="file" name="gambar" id="gambar" required />
                        </div>
                        <input name="add_record" type="submit" class="btn mb-4 mt-2" value="Tambah">
                    </form>
                </div>
            </div>
        </div>
    </div>
