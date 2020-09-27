<?php
include("../fungsi/core_admin.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update destinasi set nama='" . $_POST[ 'nama' ]. "', alamat='" . $_POST[ 'alamat' ]. "', link='" . $_POST[ 'link' ]. "', deskripsi='" . $_POST[ 'deskripsi' ]. "' where id=" . $_GET["id_destinasi"]);
	$result = $pdo_statement->execute();
    if(!empty($_FILES['gambar']['name'])){
        $nama_gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$nama_gambar);
        $pdo_statement=$pdo_conn->prepare("update destinasi set gambar ='".$_FILES['gambar']['name']."' where id=".$_GET['id_destinasi']);
        $result = $pdo_statement->execute();
    }
    header('location:index.php?admin=destinasi');
}
?>