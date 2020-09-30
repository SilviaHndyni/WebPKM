<?php 
    include("../fungsi/core_admin.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM hotel where id=". $_GET["id_hotel"]);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $gambar = $result[0]['gambar'];
?>
    
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h3 class="text-center">Edit Data</h3>
                    <form action="hotel_update.php?id_hotel=<?php echo $result[0]['id']; ?>&nama=<?php echo $result[0]['nama']; ?>" enctype="multipart/form-data" class="mx-4" style="margin-left:4rem;" name="frmAdd" id="frmAdd" method="POST">
                    <div class="form-group">
                            <label>nama :</label>
                            <input type="text" class="form-control" value="<?php echo $result[0]['nama']; ?>" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>alamat :</label>
                            <textarea class="form-control" name="alamat" required><?php echo $result[0]['alamat']; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <label>link gmaps :</label>
                            <textarea class="form-control" name="link" required><?php echo $result[0]['link']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>gambar: </label><br/>
                            <img style="width:15%;" src="../images/<?=$gambar?>" width="100">
                            <input type="file" name="gambar" id="gambar" required />
                        </div>
                        <input name="save_record" type="submit" class="btn mb-4 mt-2" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
