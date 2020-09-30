<?php 
    include("../fungsi/core_admin.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM admin where id_admin=". $_GET["id_admin"]);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h3 class="text-center">Edit Data</h3>
                    <form action="admin_update.php?id_admin=<?php echo $result[0]['id_admin']; ?>" class="mx-4" name="frmAdd" method="POST">
                    <div class="form-group">
                            <label>username :</label>
                            <input type="text" class="form-control" name="user" value="<?php echo $result[0]['username_admin']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>password :</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                        <input name="save_record" type="submit" class="btn mb-4 mt-2" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>