<?php 
    include("../fungsi/core_admin.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM admin where id_admin=". $_GET["id_admin"]);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h1 style="margin-left:2rem;">Edit Data</h1>
                    <form action="admin_update.php?id_admin=<?php echo $result[0]['id_admin']; ?>" style="margin-left:4rem;" name="frmAdd" method="POST">
                    <label>username: </label><br/>
                        <input type="text" name="user" value="<?php echo $result[0]['username_admin']; ?>" required /><br/><br/>    
                    <label>password: </label><br/>
                        <input type="password" name="pass" required /><br/><br/>
                        <input name="save_record" type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>