
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h1 style="margin-left:2rem;">Tambah Data</h1>
                    <form action="warung_tambah.php" enctype="multipart/form-data" style="margin-left:4rem;" name="frmAdd" id="frmAdd" method="POST">
                        <label>nama: </label><br/>
                        <input type="text" name="nama" required /><br/><br/>
                        <label>alamat: </label><br/>
                        <textarea name="alamat" required></textarea><br/><br/>
                        <label>link: </label><br/>
                        <textarea name="link" required></textarea><br/><br/>
                        <label>deskripsi: </label><br/>
                        <textarea name="deskripsi" required></textarea><br/><br/>
                        <label>gambar: </label><br/>
                        <input type="file" name="gambar" id="gambar" require /><br/><br/>
                        <input name="add_record" type="submit" value="Tambah">
                    </form>
                </div>
            </div>
        </div>
    </div>
