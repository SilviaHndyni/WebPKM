
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h3 class="text-center">Tambah Data</h3>
                    
                    <form action="admin_tambah.php" class="mx-4" name="frmAdd" method="POST">
                        <div class="form-group">
                            <label>username :</label>
                            <input type="text" class="form-control" name="user" required>
                        </div>
                        <div class="form-group">
                            <label>password :</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                        <input name="add_record" type="submit" class="btn mb-4 mt-2" value="Tambah">
                    </form>
                </div>
            </div>
        </div>
    </div>
