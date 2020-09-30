

<?php 
$stmt = $pdo_conn->prepare("SELECT * FROM destinasi ORDER BY nama DESC");
$stmt->execute();
$result = $stmt->fetchAll();
$kalimat='ini kalimat';
$huruf_maksimal=28;

?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Data Wisata</h4>
                                    <a href="index.php?admin=destinasi_form">
                                        <button type="button" style="float:right;"class="btn btn-success">Tambah</button>
                                    </a>
                                    </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead> 
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Deksripsi</th>
                                            <th>Gambar</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!empty($result)) { 
                                                foreach($result as $row) {	?>
                                                <tr style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                    <td ><?php echo substr($row["nama"], 0, $huruf_maksimal); ?></td>
                                                    <td><?php echo substr($row["alamat"], 0, $huruf_maksimal); ?>...</td>
                                                    <td><?php echo substr($row["deskripsi"], 0, $huruf_maksimal); ?>...</td>
                                                    <td><img src="../images/<?=$row['gambar']?>" width="100"></td>
                                                    <td>
                                                    <a href="index.php?admin=destinasi_edit&id_destinasi=<?php echo $row['id']; ?>">
                                                    <button type="button" Style="margin-right:1rem;"class="btn btn-info">Edit</button></a>
                                                    <a href="destinasi_hapus.php?id_destinasi=<?php echo $row['id']; ?>" onclick="return confirm('Yakin Hapus?')"><button type="button" class="btn btn-warning">Hapus</button></a>
                                                    </td>
                                                </tr><?php
                                                } }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            