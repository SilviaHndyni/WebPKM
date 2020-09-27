<?php 
    include("../fungsi/core_admin.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM destinasi where id=". $_GET["id_destinasi"]);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $gambar = $result[0]['gambar'];
?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <h1 style="margin-left:2rem;">Edit Data</h1>
                    <form action="destinasi_update.php?id_destinasi=<?php echo $result[0]['id']; ?>&nama=<?php echo $result[0]['nama']; ?>" enctype="multipart/form-data" style="margin-left:4rem;" name="frmAdd" id="frmAdd" method="POST">
                        <label>nama: </label><br/>
                        <input type="text" value="<?php echo $result[0]['nama']; ?>" name="nama" required /><br/><br/>
                        <label>alamat: </label><br/>
                        <textarea name="alamat" required><?php echo $result[0]['alamat']; ?> </textarea><br/><br/>
                        <label>link: </label><br/>
                        <textarea name="link" required><?php echo $result[0]['link']; ?></textarea><br/><br/>
                        <label>deskripsi: </label><br/>
                        <textarea name="deskripsi" required><?php echo $result[0]['deskripsi']; ?></textarea><br/><br/>    
                        <label>pilih file untuk ganti gambar: </label><br/>
                        <img style="width:15%;" src="../images/<?=$gambar?>" width="100">
                        <input type="file" name="gambar" id="gambar"/><br/><br/>
                        <input name="save_record" type="submit" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
