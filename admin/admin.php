
<?php 
$stmt = $pdo_conn->prepare("SELECT * FROM admin ORDER BY username_admin DESC");
$stmt->execute();
$result = $stmt->fetchAll();?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Data Admin</h4>
                                    <a href="index.php?admin=admin_form">
                                        <button type="button" style="float:right;"class="btn btn-success">Tambah</button>
                                    </a>
                                    </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead> 
                                            <th>Username</th>
                                            <th>Password</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!empty($result)) { 
                                                foreach($result as $row) {	?>
                                            <tr>
                                                <td><?php echo $row["username_admin"]; ?></td>
                                                <td><?php echo $row["password_admin"]; ?></td>
                                                <td>
                                                <a href="index.php?admin=admin_edit&id_admin=<?php echo $row['id_admin']; ?>">
                                                <button type="button" Style="margin-right:1rem;"class="btn btn-info">Edit</button></a>
                                                <a href="admin_hapus.php?id_admin=<?php echo $row['id_admin']; ?>" onclick="return confirm('Yakin Hapus?')"><button type="button" class="btn btn-warning">Hapus</button></a>
                                            </td>
                                            </tr>
                                            
                                            <?php
                                                }}
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>